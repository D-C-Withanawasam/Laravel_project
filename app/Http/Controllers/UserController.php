<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewCourses()
    {
        // Fetch courses or any related logic
        $courses = []; // Replace with actual data fetching logic
        return view('courses.index', compact('courses'));
    }
    public function viewGrades()
    {
        // Your logic to fetch and display grades
        $grades = []; // Replace with actual data
        return view('grades.index', compact('grades'));
    }
    
}

