<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showLessons($course)
    {
        // Assuming you have a Course model and relationships defined
        $course = Course::findOrFail($course);
        $lessons = $course->lessons; // Get lessons related to this course

        return response()->json($lessons);
    }
}
