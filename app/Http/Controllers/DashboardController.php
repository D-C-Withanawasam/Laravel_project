<?php

namespace App\Http\Controllers;

use App\Models\Course;  // Import the Course model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Simple dashboard view without courses
    }
    

}
