import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbite from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './node_modules/flowbite/**/*.js',
        './node_modules/preline/**/*.js', // ✅ Tambahkan ini
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                batman: {
                    50: '#f6f6f6',
                    100: '#e7e7e7',
                    200: '#d1d1d1',
                    300: '#b0b0b0',
                    400: '#888888',
                    500: '#6d6d6d',
                    600: '#5d5d5d',
                    700: '#4f4f4f',
                    800: '#454545',
                    900: '#3d3d3d',
                    950: '#262626',
                },
                ironman: {
                    50: '#fff1f2',
                    100: '#ffe1e2',
                    200: '#ffc7c9',
                    300: '#ffa1a5',
                    400: '#ff6a70',
                    500: '#f73c43',
                    600: '#e51d25',
                    700: '#c1141b',
                    800: '#9f151b',
                    900: '#84181c',
                    950: '#48070a',
                },
            },
        },
    },

    plugins: [
        forms,
        flowbite,
        require('flowbite/plugin'),
    ],
};
