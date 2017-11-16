var webpack = require('webpack');
var path = require('path');
var glob = require('glob');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var CleanWebpackPlugin = require('clean-webpack-plugin');
var ManifestPlugin = require('webpack-manifest-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');
var inProduction = process.env.NODE_ENV === 'production';
var styleHash = inProduction ? 'contenthash' : 'hash';
var scriptHash = inProduction ? 'chunkhash' : 'hash';

module.exports = {
  entry: {
    app: glob.sync('./resources/assets/+(s[ac]ss|js)/main.+(s[ac]ss|js)'),
    login: glob.sync('./resources/assets/+(s[ac]ss|js)/login.+(s[ac]ss|js)'),
    vendor: ['jquery', 'vue'],
  },
  output: {
    path: path.resolve(__dirname, './static/'),
    filename: `js/[name].[${scriptHash}].js`,
  },

  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          loaders: {
            // Since sass-loader (weirdly) has SCSS as its default parse mode, we map
            // the "scss" and "sass" values for the lang attribute to the right configs here.
            // other preprocessors should work out of the box, no loader config like this necessary.
            'scss': [
              'vue-style-loader',
              'css-loader',
              'sass-loader'
            ],
            'sass': [
              'vue-style-loader',
              'css-loader',
              'sass-loader?indentedSyntax'
            ]
          },
          // other vue-loader options go here
        },
      },
      {
        test: /\.s[ac]ss$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            {
              loader: 'css-loader',
              options: { minimize: inProduction },
            },
            {
              loader: 'sass-loader',
              options: { sourceMap: true, },
            },
          ],
        }),
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'images/',
              publicPath: '../',
            },
          },
          'image-webpack-loader',
        ],
      },
    ],
  },

  resolve: {
    alias: {
      'vue$': 'vue/dist/vue.esm.js',
    },
  },

  plugins: [
    new ExtractTextPlugin(`css/[name].[${styleHash}].css`),

    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://test.dev/', // YOUR DEV-SERVER URL
      files: [
        './*.php',
        './resources/views/*.twig',
        './static/*.*',
      ],
    }),

    new CleanWebpackPlugin(['static/css/*', 'static/js/*'], {
      watch: true,
    }),

    new ManifestPlugin(),
    new webpack.optimize.CommonsChunkPlugin({
      name: 'vendor',
      filename: `js/[name].[${scriptHash}].js`,
    }),
  ],
};

if (inProduction) {
  module.exports.plugins.push(new webpack.optimize.UglifyJsPlugin());

  module.exports.plugins.push(new webpack.DefinePlugin({
      'process.env': {
        NODE_ENV: '"production"'
      }
    })
  );
}
