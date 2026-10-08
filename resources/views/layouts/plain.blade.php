<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Add CSS/JS links here if needed -->
</head>
<body>
    <main>
        {{ $slot }} <!-- This renders the content of your page -->
    </main>
</body>
</html>
