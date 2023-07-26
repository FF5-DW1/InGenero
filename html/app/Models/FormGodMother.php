<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormGodMother extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'description',
        'profile_media',
        'is_active',
    ];
}
