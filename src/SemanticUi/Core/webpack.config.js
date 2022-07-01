var Encore = require('@symfony/webpack-encore');
const WebpackRTLPlugin = require('webpack-rtl-plugin');

Encore
    .setOutputPath('./public/')
    .setPublicPath('./')
    .setManifestKeyPrefix('bundles/syliusuxsemanticui')

    .cleanupOutputBeforeBuild()
    .enableSassLoader()
    .enableSourceMaps(false)
    .enableVersioning(false)
    .disableSingleRuntimeChunk()

    // copy FontAwesome fonts
    .copyFiles({
        from: './node_modules/@fortawesome/fontawesome-free/webfonts/',
        // relative to the output dir
        to: 'fonts/[name].[hash].[ext]'
    })

    // copy flag images for country type
    .copyFiles({
        from: './assets/images/flags/',
        to: 'images/flags/[path][name].[ext]',
        pattern: /\.png$/
    })

    .addPlugin(new WebpackRTLPlugin())

    .addEntry('app', './assets/js/app.js')
    .enableSassLoader((options) => {
        options.additionalData = '@import "~semantic-ui-css/semantic.min.css";';
    })

module.exports = Encore.getWebpackConfig();
