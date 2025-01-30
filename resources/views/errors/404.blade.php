<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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

    {{-- node imports  --}}
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    {{-- title --}}
    <title>Not Found</title>
</head>

<body data-theme="business" class="scrollbar-custom">
    <noscript>
        <div role="alert" class="alert alert-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current shrink-0" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>{{ __('Warning: please turn on the Javascript on your browser for a better experience!') }}</span>
        </div>
    </noscript>

    <div class="flex flex-col items-center justify-center min-h-screen bg-base-200">
        <figure>
            <img src="/images/404.png"
                alt="Error image" width="384">
        </figure>
        <div class="text-center lg:text-left">
            <article class="prose lg:prose-xl">
                <h1>Oops!</h1>
                <p>
                    It seems that the requested page has already been removed or were not founded in our resources
                    collection.
                </p>
                <p>
                    If you really need this page please contact the support or hold on for a moment.
                </p>
                <button class="btn btn-primary" onclick="window.location='/'">
                    Go back to home
                </button>
            </article>
        </div>
    </div>

    {{-- toaster component --}}
    <x-toaster-hub />
</body>

</html>
