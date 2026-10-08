<!-- resources/views/landing.blade.php -->

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto text-center py-20">
        <h1 class="text-4xl font-bold">Thank You for Visiting!</h1>
        <p class="mt-4 text-lg">You have successfully logged out. Come back soon!</p>
        <a href="{{ route('login') }}" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded-md">Log in Again</a>
    </div>
</body>
</html>
