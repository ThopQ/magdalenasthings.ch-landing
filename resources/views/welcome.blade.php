<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>magdalenasthings</title>
</head>

<body class="min-h-dvh min-w-screen bg-base-100">
    <div class="absolute bottom-8 left-8 right-8 top-8 overflow-hidden rounded-2xl bg-white shadow-lg">
        <div class="relative z-10 px-4 sm:px-0">
            <div class="flex justify-center py-6">
                <img class="size-14 rounded-full object-cover" src="/logo.jpg" alt="Logo" />
            </div>

            <div class="flex justify-center py-4">
                <h1 class="text-center text-4xl font-bold tracking-tight text-secondary">
                    Dein neuer Pflanzenshop entsteht hier
                </h1>
            </div>

            <div class="flex flex-col items-center py-6 text-lg">
                <p class="mb-4 max-w-lg text-center">
                    Verwandle auch dein zu Hause in einen Dschungel. In unserem handverlesenen Sortiment findet jeder
                    seine neue Lieblingspflanze.
                </p>
                <p class="max-w-lg text-center">
                    Registriere dich jetzt um als Erster informiert zu werden wenn unser
                    Online-Shop für Zimmerpflanzen eröffnet.
                </p>
            </div>

            <div class="flex justify-center py-4">
                <button type=button
                    class="inline-flex transform rounded-full bg-primary px-6 py-2 font-semibold text-white transition duration-150 ease-in-out sm:px-8 sm:py-4 sm:hover:-translate-y-1 sm:hover:scale-110 sm:active:translate-y-0">
                    Jetzt registrieren
                </button>
            </div>
        </div>


        <img src="/gradient-background.svg" alt="background" class="absolute bottom-0 z-0 w-full lg:-mb-24 xl:-mb-36">
    </div>



</body>

</html>
