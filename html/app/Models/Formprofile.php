<!-- 
// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model; -->

<!-- // class Formprofile extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'id',
//         'name',
//         'last_name',
//         'idiomas',
//         'date_of_birth',
//         'height',
//         'weight',
//         'eyes_color',
//         'hair_color',
//         'additional_info',
//         'artistic_skills',
//         'profile_media',
//         'is_active',
//     ];
// } --> 


<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Formprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'last_name',
        'idiomas',
        'date_of_birth',
        'height',
        'weight',
        'eyes_color',
        'hair_color',
        'additional_info',
        'artistic_skills',
        'profile_media',
        'is_active',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($formprofile) {
            $formprofile->slug = Str::slug($formprofile->name . ' ' . $formprofile->last_name); // Combinar 'name' y 'last_name' para generar el slug
        });
    }
}

