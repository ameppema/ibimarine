const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            'old-gold': '#AAA173',
            'old-black': '#3C4045',
            'white': '#ffffff',
            'black': '#000000',
            'gray-1':'#e4e4e4'
        },
        extend: {
            lineClamp: {
                8: '8',
                9: '9',
                12: '12',
              },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'), ],
};
