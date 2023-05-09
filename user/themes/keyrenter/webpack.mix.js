let mix = require("laravel-mix");
require("mix-tailwindcss");

const extension = mix.inProduction() ? ".min" : "";

mix
  .js("js/main.js", `js/main${extension}.js`)
  .css("css/site.css", `css/site${extension}.css`)
  .tailwind()
  .setPublicPath("dist")
  .version()
  .browserSync({
    proxy: "https://127.0.0.1:8000",
    files: [
      "./dist/mix-manifest.json",
      "../../pages/**/*.md",
      "./**/*.twig",
      "../../pages/**/*.svg",
    ],
  });
