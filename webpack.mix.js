const mix = require('laravel-mix');

const path = require('path');
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

const directoryPath = path.join(__dirname, 'resources/assets');
//List all themes
themes = fs.readdirSync(directoryPath);
themes.forEach(function (theme) {

    //Liste all modules
    folders = fs.readdirSync(path.join(__dirname, 'resources/assets/'+theme));
    folders.forEach(function (folder) {

        //Liste all assets for each module
        files = fs.readdirSync(path.join(__dirname, 'resources/assets/'+theme+'/'+folder))
        files.forEach(function (file) {
            if (folder == 'default')
            {
                if (file == 'style.scss')
                {
                    mix.sass('resources/assets/'+theme+'/'+folder+'/style.scss', 'public/'+theme+'/css');
                }

                if (file == 'script.js')
                {
                    mix.js('resources/assets/'+theme+'/'+folder+'/script.js', 'public/'+theme+'/js');
                }
            }
            else
            {
                if (file == 'style.scss')
                {
                    mix.sass('resources/assets/'+theme+'/'+folder+'/style.scss', 'public/'+theme+'/'+folder+'/css');
                }

                if (file == 'script.js')
                {
                    mix.js('resources/assets/'+theme+'/'+folder+'/script.js', 'public/'+theme+'/'+folder+'/js');
                }
            }
        });
    });
});
