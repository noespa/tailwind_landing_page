module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
            screens: {
                lg: '1124px',
                xl: '1124px',
                '2xl': '1124px',
            }
        },
        fontFamily: {
            Nunito: ["Nunito, sans-serif"],
        },
        extend: {
            colors: {
                "bookmark-purple": "#5267DF",
                "bookmark-red": "#FA5959",
                "bookmark-blue": "#242A45",
                "bookmark-grey": "#9194A2",
                "bookmark-white": "#F7F7F7",
            },
        },
    },
    plugins: [],
}
