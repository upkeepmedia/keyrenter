/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "../../config/**/*.yaml",
    "../../pages/**/*.md",
    "./blueprints/**/*.yaml",
    "./js/**/*.js",
    "./templates/**/*.twig",
    "./keyrenter.yaml",
    "./keyrenter.php",
  ],
  darkMode: "class", //false or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        green: {
          DEFAULT: "#63BC1E",
          50: "#F8FCF4",
          100: "#E0EFDF",
          200: "#CBD8CA",
          300: "#BFDDB0",
          400: "#BFF27D",
          500: "#63BC1E",
          600: "#57A719",
          700: "#4D8B1D",
          800: "#335D13",
          900: "#203826",
          950: "#151D17",
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("tailwindcss-debug-screens"),
  ],
};
