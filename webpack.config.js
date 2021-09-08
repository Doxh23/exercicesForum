/* eslint-disable no-unused-vars */
// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require('path')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const WorkboxWebpackPlugin = require('workbox-webpack-plugin')
const MiniCssExctractPlugin = require('mini-css-extract-plugin')

// eslint-disable-next-line eqeqeq
const isProduction = process.env.NODE_ENV == 'production'

const config = {
    entry: './src/public/js/index.js',
    output: {
        path: path.resolve(__dirname, 'src', 'dist'),
    },
    devServer: {
        open: true,
        host: 'localhost',
    },
    plugins: [
        // Add your plugins here
        // Learn more about plugins from https://webpack.js.org/configuration/plugins/
    ],
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
            {
                test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
                type: 'asset',
            },
            // Add your rules for custom modules here
            // Learn more about loaders from https://webpack.js.org/loaders/
        ],
    },
}

module.exports = () => {
    if (isProduction) {
        config.mode = 'production'

        config.plugins.push(new WorkboxWebpackPlugin.GenerateSW())
        config.module.rules[0].use[0] = MiniCssExctractPlugin.loader
        config.plugins.push(
            new MiniCssExctractPlugin({ filename: 'screen.css' })
        )
    } else {
        config.mode = 'development'
    }
    return config
}
