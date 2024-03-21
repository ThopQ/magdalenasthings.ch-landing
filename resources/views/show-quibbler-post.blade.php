<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $quibbler_post['title'] }}</title>
</head>

<body class="min-h-dvh min-w-screen bg-base-100">
    <div class="container mx-auto max-w-prose py-12">
        <article class="prose overflow-hidden rounded-2xl bg-white px-4 py-8 shadow-lg lg:prose-xl">
            @markdown($quibbler_post['body'])
        </article>
    </div>




</body>

</html>
