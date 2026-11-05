const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const {TsconfigPathsPlugin} = require('tsconfig-paths-webpack-plugin')
const { WebpackManifestPlugin } = require('webpack-manifest-plugin')

module.exports = (env, argv) => {
    return {
        target: 'web',
        devtool: argv.mode === 'production' ? false : 'eval-source-map',
        entry: {
            'black-board-widget': './Widgets/BlackBoardWidget.ts',
        },

        // specify the context directory for entry-points:
        context: path.join(__dirname, './typescript/'),

        output: {

            // every point of entry maps to a filename - that's "[name].js"
            filename: 'js/[name].[contenthash].js',

            // every file is emitted to an output path - in our example, that's "assets" in the package root
            path: path.join(__dirname, './public/assets'),

            // clean the output path before writing to it:
            clean: {
                keep: (assetPath) => {
                    // Keep everything that's NOT in js or css folders
                    return !assetPath.match(/^(js|css)\//);
                },
            },
        },
        module: {
            rules: [
                // all files with a `.ts` or `.tsx` extension will be loaded by `ts-loader`:
                {
                    test: /\.tsx?$/,
                    use: [
                        {
                            loader: 'ts-loader',
                            options: {}
                        }
                    ]
                },
                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: {
                                url: false,
                            }
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true,
                                api: 'modern',
                                implementation: require.resolve('sass'),  // Ensure we use dart-sass
                            }
                        }
                    ]
                }
            ]
        },

        // specify file-extensions that will be resolved as modules in `import` statements:
        resolve: {
            alias: {},
            extensions: ['.ts', '.tsx', '.js', '.scss', '.css'],
            plugins: [
                // Used for resolving paths to our own modules
                new TsconfigPathsPlugin({configFile: './typescript/tsconfig.json'})
            ]
        },

        plugins: [
            new MiniCssExtractPlugin({
                filename: 'css/[name].[contenthash].css',
            }),
            new WebpackManifestPlugin({
                fileName: '../../manifest.json',
            })
        ]
    }
}
