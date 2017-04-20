var webpack = require("webpack");
var path = require("path");

module.exports = {
  entry: {
    "vendor": __dirname + "/_src/vendor",
    "main": __dirname + "/_src/main"
  },
  output: {
    path: __dirname + "/js",
    filename: "[name].bundle.js"
  },
  resolve: {
    alias: {
      jquery: "jquery/src/jquery"
    },
    extensions: [".ts", ".js"]
  },
  devtool: "source-map",
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery"
    }),
    new webpack.optimize.CommonsChunkPlugin({
      name: ["main", "vendor"]
    }),
    new webpack.LoaderOptionsPlugin({
      minimize: true,
      debug: false
    }),
    new webpack.optimize.UglifyJsPlugin({
      minimize: true,
      sourceMap: true,
      beautify: false,
      output: {
        comments: false
      },
      mangle: {
        screw_ie8: true
      },
      compress: {
        screw_ie8: true,
        warnings: false,
        conditionals: true,
        unused: true,
        comparisons: true,
        sequences: true,
        dead_code: true,
        evaluate: true,
        if_return: true,
        join_vars: true
      },
    })
  ],
  module: {
    loaders: [
      {
        test: /\.ts$/,
        loaders: ["awesome-typescript-loader"],
        exclude: [/\.(spec|e2e)\.ts$/]
      },
      {
        test: /[\/\\]node_modules[\/\\]some-module[\/\\]index\.js$/,
        loader: "imports-loader?define=>false"
      }
    ]
  },
  node: {
    global: true,
    crypto: "empty",
    process: false,
    module: false,
    clearImmediate: false,
    setImmediate: false
  }
}