<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Explicitly define the table name if it's not the plural form of the model name
    protected $table = 'courses';

    // Define the columns that are mass assignable, if needed
    protected $fillable = ['title', 'description', 'image_url'];
}
