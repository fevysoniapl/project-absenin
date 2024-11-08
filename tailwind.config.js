import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xs': '10px',
                's': '12px',
                'sm': '14px',
                'base': '16px',
                'lg' : '18px',
                'xl': '20px',
                '2xl': '24px',
                '3xl': '28px',
                '4xl': '36px',
                '5xl': '48px',
                '6xl': '56px',
              },
            colors: {
                'x-lightblue': '#D9F3FF',
                'x-blue': '#3ABEF9',
                'x-darkblue': '#0084BF',
                'x-grey': '#4D4D4D',
                'x-lightgrey': '#717171',
                'x-green': '#4CAF4F',
                'x-lightgreen': '#8DD68F',
                'x-red': '#ED1D2B',
                'x-lightred': '#F16972',
                'x-light': '#F5F7FA'
              },
        },
    },
    plugins: [],
};
