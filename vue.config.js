module.exports = {
  chainWebpack: (config) => {
    config
      .plugins
      .delete('html').delete('preload').delete('prefetch');
  },
  configureWebpack: {
    optimization: {
      runtimeChunk: 'single',
      splitChunks: {
        cacheGroups: {
          default: false,
          vendors: false,
          vendor: {
            chunks: 'all',
            name: 'vendor',
            test: /node_modules/,
          },
        },
      },
    },
    output: {
      filename: 'js/[name].js',
      chunkFilename: 'js/[name].js',
      hotUpdateChunkFilename: 'hot-update.js',
      hotUpdateMainFilename: 'hot-update.json',
    },
  },
  css: {
    extract: {
      filename: 'css/[name].css',
      chunkFilename: 'css/[name].css',
    },
  },
  publicPath: '/wp-content/themes/vue-theme/dist',
  runtimeCompiler: true,
};
