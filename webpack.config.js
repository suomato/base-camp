var webpack = require('webpack');
var path = require('path');
var glob = require('glob');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var PurifyCSSPlugin = require('purifycss-webpack');
var CleanWebpackPlugin = require('clean-webpack-plugin');
var ManifestPlugin = require('webpack-manifest-plugin');
var inProduction = process.env.NODE_ENV === 'production';

module.exports = {
  entry: {
    app: [
      './resources/assets/js/main.js',
      './resources/assets/sass/main.scss'
    ]
  },

  output: {
    path: path.resolve(__dirname, './static/'),
    filename: 'js/[name].[chunkhash].js'
  },

  module: {
    rules: [
      {
        test: /\.s[ac]ss$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: ["css-loader", "sass-loader"],
        }),
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader"
      }
    ]
  },

  plugins: [
    new ExtractTextPlugin("css/[name].[contenthash].css"),
    new PurifyCSSPlugin({
      paths: glob.sync(path.join(__dirname, 'resources/views/**/*.twig')),
      minimize: inProduction
    }),
    new CleanWebpackPlugin(['static'], {
      watch: true
    }),
    new ManifestPlugin(),
  ],
};

if (inProduction) {
  module.exports.plugins.push(
    new webpack.optimize.UglifyJsPlugin()
  );
}
