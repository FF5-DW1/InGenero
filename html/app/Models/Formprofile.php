<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'nationality',
        'date_of_birth',
        'height',
        'weight',
        'eyes_color',
        'hair_color',
        'additional_info',
        'artistic_skills',
        'profile_media',
        'password',
        'password_confirmation',
    ];
}
