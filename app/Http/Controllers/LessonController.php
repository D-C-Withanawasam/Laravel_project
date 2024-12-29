<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    // Display the form
    public function create()
    {
        return view('lessons.create');
    }

    // Store the submitted form data into the database
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Save the lesson to the database
        Lesson::create($request->all());

        // Redirect back with a success message
        return redirect()->route('lessons.create')->with('success', 'Lesson saved successfully!');
    }
}

