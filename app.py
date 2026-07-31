import os
import io
# Models ko D drive par save karne ke liye path configuration
os.environ['U2NET_HOME'] = r'D:\u2net_models'

from flask import Flask, request, send_file
from rembg import remove, new_session
from PIL import Image, ImageDraw, ImageFont

app = Flask(__name__)
# Preload fast session at startup
session = new_session("u2netp")

def apply_watermark_to_image(image):
    """Clean diagonal repeated watermark generator on PIL Image object."""
    overlay = Image.new("RGBA", image.size, (255, 255, 255, 0))
    draw = ImageDraw.Draw(overlay)

    text = "ClearCut AI - Free Tier"
    font = ImageFont.load_default()

    # Diagonal watermark overlay across image
    spacing = int(image.height / 4)
    for y in range(0, image.height, spacing if spacing > 0 else 50):
        x = (y * 2) % (image.width if image.width > 0 else 100)
        draw.text(
            (x, y), text, fill=(255, 255, 255, 110), font=font
        )  # Semi-transparent white text

    return Image.alpha_composite(image, overlay)


@app.route("/remove-bg", methods=["POST"])
def remove_bg():
    if "image" not in request.files:
        return {"error": "No image uploaded"}, 400

    file = request.files["image"]

    # Check request parameters sent from Laravel
    is_watermark_required = (
        request.form.get("watermark", "false").lower() == "true"
    )
    bg_color = request.form.get("bg_color", "transparent")

    # 1. Process background removal via rembg
    input_bytes = file.read()
    output_bytes = remove(input_bytes, session=session)
    cutout = Image.open(io.BytesIO(output_bytes)).convert("RGBA")

    width, height = cutout.size
    final_image = Image.new("RGBA", (width, height), (0, 0, 0, 0))

    # 2. Apply Custom Background (Image or Solid Color)
    if "bg_image" in request.files:
        bg_file = request.files["bg_image"]
        bg_img = Image.open(bg_file.stream).convert("RGBA")
        bg_img = bg_img.resize((width, height), Image.Resampling.LANCZOS)
        final_image.paste(bg_img, (0, 0))

    elif bg_color and bg_color != "transparent":
        # Create solid color background layer
        color_layer = Image.new("RGBA", (width, height), bg_color)
        final_image.paste(color_layer, (0, 0))

    # 3. Composite Transparent Cutout on top of background
    final_image = Image.alpha_composite(final_image, cutout)

    # 4. Apply Watermark if needed (Free Users / Guests)
    if is_watermark_required:
        final_image = apply_watermark_to_image(final_image)

    # 5. Export Stream Setup
    img_io = io.BytesIO()

    # Agar background solid ya image hai, toh flattened RGB format save karein
    if "bg_image" in request.files or (bg_color and bg_color != "transparent"):
        final_image.convert("RGB").save(img_io, "JPEG", quality=95)
        mimetype = "image/jpeg"
    else:
        final_image.save(img_io, "PNG", compress_level=1)
        mimetype = "image/png"

    img_io.seek(0)
    return send_file(img_io, mimetype=mimetype)


if __name__ == "__main__":
    app.run(host="127.0.0.1", port=5000, debug=False, threaded=True)