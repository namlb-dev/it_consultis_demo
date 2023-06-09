
/**
 * Webpack configuration.
 */
 const path                    = require('path')
 const MiniCssExtractPlugin    = require('mini-css-extract-plugin')
 const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin')
 const cssnano                 = require('cssnano')
 const { CleanWebpackPlugin }  = require('clean-webpack-plugin')
 const UglifyJsPlugin          = require('uglifyjs-webpack-plugin')
 const RemovePlugin            = require('remove-files-webpack-plugin');


// JS Directory path.
const JS_DIR    = path.resolve(__dirname, 'src/js');
const BUILD_DIR = path.resolve(__dirname + '/../../themes/ms-theme/assets/', 'custom')
const IMAGES_DIR = path.resolve(__dirname + '/../../assets/', 'images');

const entry = {
  core: JS_DIR + '/core.js',
  extend: JS_DIR + '/extend.js'
}

const output = {
  path: BUILD_DIR,
  filename: 'js/[name].js'
}

const plugins = (argv) => [
new CleanWebpackPlugin({
  cleanStaleWebpackAssets: ('production' === argv.mode)
}),

new MiniCssExtractPlugin({
  filename: 'css/[name].css'
}),

new RemovePlugin({

  after: {

      root: BUILD_DIR,

      include: [

        './js',

      ],

      trash: true

  }

})
]

const rules = [
{
  test: /\.scss$/,
  exclude: /node_modules/,
  use: [
  MiniCssExtractPlugin.loader,
  'css-loader',
  'postcss-loader',
  'sass-loader',
  ]
},
{
  test: /\.(ttf|otf|eot|woff(2)?)(\?[a-z0-9]+)?$/,
  exclude: [/node_modules/],
  use: {
    loader: 'file-loader',
    options: {
      name: 'fonts/[name].[ext]',
      publicPath: '../'
    }
  }
},
{
  test: /\.(png|jpe?g|gif|svg)$/i,
  use: [
    {
      loader: 'file-loader',
      options: {
        name: (resourcePath, resourceQuery) => {

          var index = resourcePath.indexOf("images");

          return resourcePath.substring(index);

        },
        publicPath: process.env.BUILD_ASSETS === 'pricing' ? '../' : '/wp-content/themes/ms-theme/assets/',
        emitFile: false,
      },
    },
  ],
}
]

/**
 * Since you may have to disambiguate in your webpack.config.js between development and production builds,
 * you can export a function from your webpack configuration instead of exporting an object
 *
 * @param {string} env environment ( See the environment options CLI documentation for syntax examples. https://webpack.js.org/api/cli/#environment-options )
 * @param argv options map ( This describes the options passed to webpack, with keys such as output-filename and optimize-minimize )
 * @return {{output: *, devtool: string, entry: *, optimization: {minimizer: [*, *]}, plugins: *, module: {rules: *}, externals: {jquery: string}}}
 *
 * @see https://webpack.js.org/configuration/configuration-types/#exporting-a-function
 */
 module.exports = (env, argv) => ({

  entry: entry,

  output: output,

  /**
   * A full SourceMap is emitted as a separate file ( e.g.  main.js.map )
   * It adds a reference comment to the bundle so development tools know where to find it.
   * set this to false if you don't need it
   */

   devtool: 'production' === process.env.NODE_ENV ? 'source-map' : false,

   module: {
    rules: rules
  },

  optimization: {
    minimizer: [
    new OptimizeCssAssetsPlugin({
      cssProcessor: cssnano,
      cssProcessorOptions: {
        map: {
          inline: false,
          annotation: true,
        }
      }
    }),

    new UglifyJsPlugin({
      cache: false,
      parallel: true,
      sourceMap: false
    })
    ]
  },

  plugins: plugins(argv),

  externals: {
    jquery: 'jQuery'
  }
})
