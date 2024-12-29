<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <h1 class="text-3xl font-bold mb-4">Your Profile</h1>
    <p>Welcome, <strong>{{ auth()->user()->name }}</strong>!</p>

    @if (auth()->user()->email)
        <p>Email: {{ auth()->user()->email }}</p>
    @endif

    <a href="/dashboard" class="text-blue-500 hover:underline">Go to Dashboard</a>
</body>
</html>
