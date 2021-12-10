const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                gray: colors.trueGray,
            }
        },
        fontFamily: {
            'sans': ['Open Sans', 'Arial', 'sans-serif'],
        },
    },
    variants: {
        extend: {
            backgroundColor: ['disabled']
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
