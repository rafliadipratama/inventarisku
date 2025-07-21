import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#3B82F6", // biru
                    light: "#60A5FA",
                    dark: "#1D4ED8",
                },
                secondary: {
                    DEFAULT: "#10B981", // hijau
                    light: "#6EE7B7",
                    dark: "#047857",
                },
                danger: {
                    DEFAULT: "#EF4444",
                    light: "#FCA5A5",
                    dark: "#991B1B",
                },
                background: "#F9FAFB",
                surface: "#FFFFFF",
                heading: "#111827",
                text: "#374151",
            },
            fontFamily: {
                sans: ["Figtree", "ui-sans-serif", "system-ui"],
            },
        },
    },
    plugins: [],
};
