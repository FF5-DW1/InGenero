<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Determinar si el usuario es administrador o no.
     *
     * @return bool
     */
    public function getIsAdminAttribute()
    {
        return $this->attributes['is_admin'] === 1;
    }

    /**
     * Determinar si el usuario no es administrador.
     *
     * @return bool
     */
    public function getIsNotAdminAttribute()
    {
        return $this->attributes['is_admin'] === 0;
    }

    /**
     * Verificar si el usuario es administrador.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->attributes['is_admin'] === 1;
    }

    /**
     * Verificar si el usuario no es administrador.
     *
     * @return bool
     */
    public function isNotAdmin()
    {
        return $this->attributes['is_admin'] === 0;
    }

}
