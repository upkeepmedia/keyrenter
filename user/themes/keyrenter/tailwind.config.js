const colors = require("tailwindcss/colors");

module.exports = {
  content: [
    "../../config/**/*.yaml",
    "../../pages/**/*.md",
    "../../pages/**/*.svg",
    "./blueprints/**/*.yaml",
    "./js/**/*.js",
    "./templates/**/*.twig",
    "./keyrenter.yaml",
    "./keyrenter.php",
  ],
  darkMode: "class", //false or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        sm: "640px",
        md: "768px",
        lg: "1024px",
        xl: "1280px",
        "2xl": "1536px",
      },
    },
    colors: {
      primary: {
        lighter: colors.yellow["300"],
        DEFAULT: colors.yellow["400"],
        darker: colors.yellow["500"],
      },
      black: colors.black,
      white: colors.white,
      grey: colors.neutral,
      red: colors.rose,
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
      blue: colors.blue,
      orange: colors.orange,
      indigo: colors.indigo,
      transparent: "transparent",
      inherit: "inherit",
    },
    typography: (theme) => ({
      DEFAULT: {
        css: {
          color: "inherit",
          lineHeight: "inherit",
          maxWidth: "inherit",
          a: {
            transition: "all 500ms",
            color: theme("colors.primary.DEFAULT"),
            "&:hover": {
              color: theme("colors.primary.darker"),
            },
            textDecoration: "none",
          },
          strong: {
            color: "inherit",
          },
        },
      },
    }),
  },
  variants: {
    extend: {},
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/typography"),
    require("tailwindcss-debug-screens"),
  ],
  important: false,
};
