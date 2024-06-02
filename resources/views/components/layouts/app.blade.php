<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- meta tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- google fonts imports --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    {{-- font awesome imports --}}
    <script src="https://kit.fontawesome.com/21370d6dca.js" crossorigin="anonymous"></script>

    {{-- node imports  --}}
    @vite('resources/css/app.css')

    {{-- title --}}
    <title>{{ "$title - G. S. Cardoso" ?? 'Gabriel S. Cardoso | Software Solutions'}}</title>
</head>

<body class="scrollbar-custom">
    <livewire:common.header>
    <main>
        {{ $slot }}
    </main>
    <livewire:common.footer>
</body>

</html>
