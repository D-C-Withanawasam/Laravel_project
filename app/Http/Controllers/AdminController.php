<?php
namespace App\Http\Controllers;
use App\Models\Course; 

use Illuminate\Http\Request;

class AdminController extends Controller
{
    


public function dashboard()
{
    $courses = Course::all(); // Fetch all courses from the database (adjust according to your needs)
    return view('dashboard', compact('courses')); // Pass the courses to the view
}


}




