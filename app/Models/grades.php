<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'active',
        'Programming_basics',
        'computer_programming',
        'Computer_assembly',
        'Databases',
        'Technical_Support',
        'Career_guidance',
        'general_appreciation'
    ];
}
