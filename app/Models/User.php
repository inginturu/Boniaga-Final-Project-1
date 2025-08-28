<?php

namespace App\Models;

// 1. TAMBAHKAN DUA BARIS INI
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 2. TAMBAHKAN "implements FilamentUser" DI SINI
class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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
        ];
    }

    /**
     * 3. PERBAIKI METHOD INI - WAJIB ADA PARAMETER (Panel $panel)
     * Ini adalah method yang benar untuk otorisasi Filament v3.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->hasVerifiedEmail();
    }

    // Relasi Anda tetap aman di sini
    public function categories()
    {
        return $this->hasMany(Categories::class, 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'user_id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImages::class, 'user_id');
    }

    public function informationStore()
    {
        return $this->hasOne(InformationStore::class, 'user_id');
    }
}