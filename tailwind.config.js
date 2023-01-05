const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        'node_modules/preline/dist/*.js',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                light: {
                    300: '#CAD2C5'
                },
                dark: {
                    900: '#2f3e46'
                },
                // #f0faf6, #6bc7db, #1c3973, #131453, #1a1042
                // https://coolors.co/f0faf6-6bc7db-1c3973-131453-1a1042
                cool: {
                    50: '#fdf8f6',
                    100: '#f2e8e5',
                    200: '#eaddd7',
                    300: '#cad2c5',
                    400: '#d2bab0',
                    500: '#bfa094',
                    600: '#a18072',
                    700: '#977669',
                    800: '#846358',
                    900: '#2F3E46',
                },
                firefly: {
                    50: '#f2f9fd',
                    100: '#e4f1fa',
                    200: '#c4e2f3',
                    300: '#90cae9',
                    400: '#54b0dc',
                    500: '#2e96c9',
                    600: '#1f79aa',
                    700: '#1a608a',
                    800: '#1a5172',
                    900: '#0a1a24',
                },
                base: {
                    50: '#edfcf3',
                    100: '#d4f7e0',
                    200: '#aceec6',
                    300: '#77dea6',
                    400: '#3fc882',
                    500: '#1cad68',
                    600: '#0f8c53',
                    700: '#0c7044',
                    800: '#0c5938',
                    900: '#041a11',
                },
                secondary: {
                    50: '#f2f9fd',
                    100: '#e4f1fa',
                    200: '#c4e2f3',
                    300: '#90cae9',
                    400: '#54b0dc',
                    500: '#2e96c9',
                    600: '#1f79aa',
                    700: '#1a608a',
                    800: '#1a5172',
                    900: '#0a1a24',
                },
            },
        },
    },

    plugins: [
        require('preline/plugin'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
