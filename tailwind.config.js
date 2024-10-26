import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "san-marino": {
                    50: "#f4f7fb",
                    100: "#e8edf6",
                    200: "#ccdaeb",
                    300: "#9fbbda",
                    400: "#6c98c4",
                    500: "#497bae",
                    600: "#3c6a9f",
                    700: "#2e4f76",
                    800: "#294463",
                    900: "#263a54",
                    950: "#1a2537",
                },
            },
        },
    },

    plugins: [forms],
};
