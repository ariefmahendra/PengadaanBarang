/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {},
        fontFamily: {
            sans: ["Montserrat", "sans-serif"],
        },
    },
    plugins: [require("@tailwindcss/forms"), "tw-elements/dist/plugin.cjs"],
};
