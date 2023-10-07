const mix = require('laravel-mix');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
require('laravel-mix-clean');

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
const assets = './../assets'
const imagePath = assets + '/image'
const jsPath = assets + '/js'
const cssPath = assets + '/css'

mix.disableNotifications()
    .setPublicPath(assets + '/')
    .js('js/scripts.js', jsPath)
    .sass('sass/styles.scss', '/css')
    .options({
        processCssUrls: false,
        children: false,
    })
    .copyDirectory('image', `${imagePath}`)
    .copyDirectory('node_modules/aos/dist/aos.js', jsPath)
    .copyDirectory('node_modules/aos/dist/aos.css', cssPath)
    .copyDirectory('node_modules/particles.js/particles.js', jsPath)

    .webpackConfig({
        optimization: {
            minimize: true,
        },
        plugins: [
            new CleanWebpackPlugin(),
        ]
    });


if(!mix.inProduction()) {
    mix.sourceMaps();
    mix.webpackConfig({ devtool: 'inline-source-map'})
}
