const mix = require("laravel-mix");
const ASSET_PATH = process.env.ASSET_PATH || "/";
require("laravel-mix-merge-manifest");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/frontend/app.js", "public/js/frontend/app.js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .mergeManifest();

mix.webpackConfig({
    output: {
        publicPath: ASSET_PATH,
        chunkFilename: mix.inProduction()
            ? "js/frontend/chunk/[name].[chunkhash].js"
            : "js/frontend/chunk/[name].js",
    },
    resolve: {
        alias: {
            "@images": path.resolve(__dirname, "resources/images"),
            "@components": path.resolve(__dirname, "resources/js/components"),
            "@mixins": path.resolve(__dirname, "resources/js/mixins"),
        },
    },
}).setResourceRoot(ASSET_PATH);

if (mix.inProduction()) {
    mix.version();
}