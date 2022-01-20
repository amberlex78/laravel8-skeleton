const mix = require('laravel-mix');
const path = require('path');

mix.options({
    processCssUrls: false
});

const SECTION = process.env.SECTION;
mix.setPublicPath(path.normalize('public/' + SECTION));
mix.setResourceRoot('../');

if (SECTION === 'admin') {
    mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/admin/webfonts');
    mix
        .sass('resources/admin/css/vendor.scss', 'css')
        .sass('resources/admin/css/app.scss', 'css')
        .js('resources/admin/js/app.js', 'js')
        .extract([
            'jquery',
            'bootstrap',
            'startbootstrap-sb-admin',
        ]);
}

if (SECTION === 'front') {
    mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/front/webfonts');
    mix
        .sass('resources/front/css/vendor.scss', 'css')
        .sass('resources/front/css/app.scss', 'css')
        .js('resources/front/js/app.js', 'js')
        .extract([
            'jquery',
            'bootstrap',
        ]);
}

if (mix.inProduction()) {
    mix.version();
} else {
    // Uses inline source-maps on development
    mix.webpackConfig({
        devtool: 'inline-source-map'
    }).sourceMaps();
}
