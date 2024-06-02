/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/masmerise/livewire-toaster/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Lato', 'sans-serif'],
            },
            backgroundImage: {
                'home-hero': 'url("/public/images/home-hero.jpg")',
            }
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require('daisyui'),
    ],
};
