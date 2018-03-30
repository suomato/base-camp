const webpack = require('webpack');
const path = require('path');
const glob = require('glob');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ManifestPlugin = require('webpack-manifest-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const config = require('./config');

const inProduction = process.env.NODE_ENV === 'production';
const styleHash = inProduction ? 'contenthash' : 'hash';
const scriptHash = inProduction ? 'chunkhash' : 'hash';

module.exports = {
  entry: {
    app: glob.sync('./resources/assets/+(s[ac]ss|js)/main.+(s[ac]ss|js)'),
    login: glob.sync('./resources/assets/+(s[ac]ss|js)/login.+(s[ac]ss|js)'),
    vendor: ['jquery', 'vue'],
  },
  output: {
    path: path.resolve(__dirname, '../static/'),
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
            scss: ['vue-style-loader', 'css-loader', 'sass-loader'],
            sass: [
              'vue-style-loader',
              'css-loader',
              'sass-loader?indentedSyntax',
            ],
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
              options: { sourceMap: true },
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
              publicPath: `${config.assetsPath}static/images/`,
            },
          },
          'image-webpack-loader',
        ],
      },
      {
        test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
        loader: 'url-loader',
        options: {
          limit: 10000,
          name: '[name].[hash:7].[ext]',
          outputPath: 'fonts/',
          publicPath: `${config.assetsPath}static/fonts/`,
        },
      },
    ],
  },

  resolve: {
    alias: {
      vue$: 'vue/dist/vue.esm.js',
      images: path.join(__dirname, '../resources/assets/images'),
    },
    extensions: ['*', '.js', '.vue', '.json'],
  },

  plugins: [
    new ExtractTextPlugin(`css/[name].[${styleHash}].css`),

    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: config.devUrl, // YOUR DEV-SERVER URL
      files: ['./*.php', './resources/views/**/*.twig', './static/*.*'],
    }),

    new CleanWebpackPlugin(['static/css/*', 'static/js/*'], {
      watch: true,
      root: path.resolve(__dirname, '../'),
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
      NODE_ENV: '"production"',
    },
  }));
}
