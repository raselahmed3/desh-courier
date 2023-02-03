const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Helvetica Neue', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                blue: {
                    600: '#5a26ff'
                },
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
