<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Define the fillable array with the necessary fields
    protected $fillable = [
        'name', // Include 'name' here
        'email',
        'password',
        // Add any other fields you need to be mass assignable
    ];

    // You can add additional relationships or methods here as needed
}
