<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'design',
        'email',
        'detail',
        'group'
    ];
    protected $table = 'faculty_profiles';
}
