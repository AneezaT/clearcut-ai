<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // <--- Sanctum Import Added

#[Fillable(['name', 'email', 'password', 'credits', 'is_pro', 'pro_until'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable; // <--- HasApiTokens Added Here

    /**
     * Default model attributes.
     */
    protected $attributes = [
        'credits' => 10,
        'is_pro' => false,
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_pro' => 'boolean',
            'pro_until' => 'datetime',
        ];
    }

    /**
     * Check if user has active PRO status.
     */
    public function isProUser(): bool
    {
        return $this->is_pro && ($this->pro_until === null || $this->pro_until->isFuture());
    }
}