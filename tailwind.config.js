const colors = require('tailwindcss/colors')

module.exports = {
    // purge: [
    //     './public/**/*.html',
    //     './public/**/*.php'
    // ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            // Build your palette here
            transparent: 'transparent',
            current: 'currentColor',

            black: colors.black,
            white: colors.white,
            fuchsia: colors.fuchsia,
            indigo: colors.indigo,
            purple: colors.purple,
            violet: colors.violet,
            blue: colors.blue,
            sky: colors.sky,
            teal: colors.teal,
            cyan: colors.cyan,
            emerald: colors.emerald,
            green: colors.green,
            orange: colors.orange,
            amber: colors.amber,
            yellow: colors.yellow,
            lime: colors.lime,
            pink: colors.pink,
            red: colors.red,
            rose: colors.rose,
            coolGray: colors.coolGray,
            blueGray: colors.blueGray,
            gray: colors.gray,
            trueGray: colors.trueGray,
            warmGray: colors.warmGray,
        },

        extend: {},
    },
    variants: {},
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
