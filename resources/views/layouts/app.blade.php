<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- google tag manager --}}
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M3NL6MVR');</script>

    {{-- microsoft clarify --}}
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "rnkap2kupt");
    </script>

    {{-- meta tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- seo helper --}}
    {!! seo() !!}

    {{-- google fonts imports --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- font awesome imports --}}
    <script src="https://kit.fontawesome.com/21370d6dca.js" crossorigin="anonymous"></script>

    {{-- node imports --}}
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    {{-- title --}}
    <title>{{ "$title - Gabriel Santos Cardoso" ?? 'Gabriel S. Cardoso | Software Solutions' }}</title>
</head>

<body data-theme="business" class="scrollbar-custom">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3NL6MVR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <noscript>
        <div role="alert" class="alert alert-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current shrink-0" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>Warning: please turn on the Javascript on your browser for a better experience!</span>
        </div>
    </noscript>

    {{-- application layout --}}
    <livewire:common.header>
        <main class="relative">
            {{ $slot }}
            <livewire:common.buy-me-an-acai>
        </main>
    <livewire:common.footer>

    {{-- toaster component --}}
    <x-toaster-hub />
</body>

</html>
