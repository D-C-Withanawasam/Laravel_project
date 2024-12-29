<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Return a view or handle logic for displaying student data
        return view('students.index');
    }

    public function show($id)
    {
        // Logic to show specific student details
    }

    public function store(Request $request)
    {
        // Logic to store new student data
    }
}
