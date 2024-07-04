/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/masmerise/livewire-toaster/resources/views/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Filament/**/*.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Lato', 'sans-serif'],
            },
            backgroundImage: {
                'home-hero': 'url("/public/images/home-hero.webp")',
            }
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require('daisyui'),
    ],
    daisyui: {
        themes: ['business'],
    },
};
