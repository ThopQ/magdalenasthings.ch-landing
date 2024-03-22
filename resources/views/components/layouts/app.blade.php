<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="min-h-dvh min-w-screen bg-base-100 p-8">
    {{ $slot }}
</body>

</html>
