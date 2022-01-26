const mix = require('laravel-mix')
const path = require('path')

mix.options({
    processCssUrls: false
})

const SECTION = process.env.SECTION
mix.setPublicPath(path.normalize('public/' + SECTION)).setResourceRoot('../')


// Admin section

if (SECTION === 'admin-vendor') {
    mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/admin-vendor/webfonts')
        .sass('resources/admin/css/vendor.scss', 'css')
        .js('resources/admin/js/vendor.js', 'js')
}

if (SECTION === 'admin') {
    mix.sass('resources/admin/css/app.scss', 'css')
        .js('resources/admin/js/app.js', 'js')
}


// Front section

if (SECTION === 'front-vendor') {
    mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/front-vendor/webfonts')
        .sass('resources/front/css/vendor.scss', 'css')
        .js('resources/front/js/vendor.js', 'js')
}

if (SECTION === 'front') {
    mix.sass('resources/front/css/app.scss', 'css')
        .js('resources/front/js/app.js', 'js')
}


if (mix.inProduction()) {
    mix.version()
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: 'inline-source-map'
    }).sourceMaps()
}
