const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const config = {
  context: path.resolve(__dirname, '.'),
  entry: ['./app.js', 'materialize-loader!./materialize.config.js'],
  output: {
    path: path.resolve(__dirname, '../dist'),
    filename: 'bundle.js',
  },
  module: {
    rules: [{
      test: /\.js$/,
      include: path.resolve(__dirname, '.'),
      use: [{
        loader: 'babel-loader',
        options: {
          presets: [
            ['es2015', {
              modules: false,
            }],
          ],
        },
      }],
    },
    {
      test: /\.scss$/,
      use: [
        'style-loader',
        'css-loader',
        'sass-loader',
      ],
    },
    {
      test: /\.vue$/,
      loader: 'vue-loader',
      options: {
        loaders: {
          scss: 'vue-style-loader!css-loader!sass-loader', // <style lang="scss">
          sass: 'vue-style-loader!css-loader!sass-loader?indentedSyntax', // <style lang="sass">
        },
      },
    },
    {
      test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
      loader: 'url-loader?limit=10000&mimetype=application/font-woff',
      options: {
        outputPath: 'dist/',
        useRelativePath: true,
      },
    },
    {
      test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/,
      loader: 'file-loader',
      options: {
        outputPath: 'dist/',
        useRelativePath: true,
      },
    },
    ],
  },
  plugins: [
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3005,
      proxy: 'phpinstajax.dev',
    }),
    new webpack.optimize.ModuleConcatenationPlugin(),
  ],
};

module.exports = config;
