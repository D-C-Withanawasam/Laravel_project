<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Learnify</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white">

    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <!-- Large, bold, centered text -->
            <h1 class="text-6xl font-bold text-gray-800 dark:text-white mb-6">Welcome to Learnify</h1>

            <!-- Buttons for Login and Signup -->
            <div class="flex justify-center gap-4">
                <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">Login</a>
                <a href="{{ route('register') }}" class="px-6 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition">Sign Up</a>
            </div>
        </div>
    </div>

</body>
</html>
