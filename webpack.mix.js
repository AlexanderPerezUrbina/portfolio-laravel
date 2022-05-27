const mix = require('laravel-mix');
const fs = require('fs');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const loadCss = (route = '/') => {
    const parsedRoute = route.replace(/^\/|\/$/g, '');

    const pagesRoutes = fs.readdirSync(`resources/scss/${parsedRoute}`)
        .filter(file => {
            if (!fs.lstatSync(`resources/scss/${parsedRoute}/${file}`).isDirectory()) {
                return false;
            }

            if (!fs.existsSync(`resources/scss/${parsedRoute}/${file}/index.scss`)) {
                return false;
            }

            return true;
        });

    if (!pagesRoutes.length) {
        return;
    }

    pagesRoutes.forEach(page => {
        const sassPath = `resources/scss/${parsedRoute}/${page}/index.scss`;
        const cssPath = `public/css/${parsedRoute}/${page}.css`;

        mix.sass(sassPath, cssPath, {
            sassOptions: {
                outputStyle: 'compressed',
            }
        });
    });
}

loadCss('/app');
