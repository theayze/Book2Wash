// const defaultTheme = require('tailwindcss/defaultTheme');

// module.exports = {
//     purge: [
//         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
//         './storage/framework/views/*.php',
//         './resources/views/**/*.blade.php',
//         './resources/js/**/*.vue',
//     ],

//     theme: {
//         extend: {
//             fontFamily: {
//                 sans: ['Nunito', ...defaultTheme.fontFamily.sans],
//             },
//         },
//     },

//     variants: {
//         extend: {
//             opacity: ['disabled'],
//         },
//     },

//     plugins: [require('@tailwindcss/forms')],
// };


const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "b2w": {
                    "50": "#c4effc",
                    "100": "#bae5f2",
                    "200": "#b0dbe8",
                    "300": "#a6d1de",
                    "400": "#9cc7d4",
                    "500": "#92bdca",
                    "600": "#88b3c0",
                    "700": "#7ea9b6",
                    "800": "#749fac",
                    "900": "#6a95a2"
                }
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
