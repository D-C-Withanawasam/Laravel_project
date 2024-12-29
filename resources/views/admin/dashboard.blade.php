@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Available Courses</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($courses as $course)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 ease-in-out">
            <!-- Course Image -->
            <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-48 object-cover">
            
            <div class="p-4">
                <!-- Course Title -->
                <h2 class="text-xl font-semibold text-gray-800">{{ $course->title }}</h2>

                <!-- Course Description (Shortened) -->
                <p class="text-gray-600 mt-2">{{ Str::limit($course->description, 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
