/** @type {import('tailwindcss').Config} */
// module.exports = {
//     content: [
//         "./**/**/*.{js,ts,jsx,tsx}",
//         "./**/*.{js,ts,jsx,tsx}",
//     ],
//     theme: {
//     extend: {},
//     },
//     plugins: [],
// }

module.exports = {
    content: [
        "./**/**/*.{html,js}"
    ],
    theme: {
        extend: {
            colors: {
                "firebrick":"#B72523",
                "anti-flash-white":"#F0F0F0",
                "vivid-orange-peel":"#FFA101",
                "emerald":"#59BF63 ",
                "sea-serpent":"#4FCDCD",
                "indian-red":"#CF5757 ",
                "temptress": "#352626",
                "champagne": "#F9E5CA",
                "persian-red": "#C52F30"
            },
        },
        fontFamily: {
            inter: ['Inter', 'sans-serif'],
        },
    },
    // plugins: [require('prettier-plugin-tailwindcss')],
}
