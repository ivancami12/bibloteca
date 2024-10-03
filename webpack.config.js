// Importa Encore de Symfony Webpack Encore
const Encore = require('@symfony/webpack-encore');

// Importa módulos adicionales de Webpack
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');

// Configuración de Symfony Webpack Encore
Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('app', './assets/app.js')
  .enableSassLoader()
  .enableSourceMaps(!Encore.isProduction())
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableVersioning(Encore.isProduction())
  .configureBabel(() => {}, {
      useBuiltIns: 'usage',
      corejs: 3,
  });

// Obtén la configuración base de Webpack Encore
const encoreConfig = Encore.getWebpackConfig();

// Configuración adicional específica de Webpack
const customWebpackConfig = {
  // Añade o sobrescribe la configuración que necesitas
  entry: './src/index.js', // Punto de entrada de tu aplicación
  output: {
    filename: 'bundle.js', // Archivo de salida
    path: path.resolve(__dirname, 'dist'), // Directorio de salida
    clean: true, // Limpiar el directorio de salida antes de cada compilación
  },
  mode: 'development', // Modo de desarrollo
  devtool: 'inline-source-map', // Fuente de mapas para depuración
  devServer: {
    contentBase: path.join(__dirname, 'dist'),
    compress: true,
    port: 9000,
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: './src/index.html', // Plantilla HTML
    }),
  ],
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
};

// Combina ambas configuraciones
module.exports = {
  ...encoreConfig,
  ...customWebpackConfig,
  // Si hay propiedades en conflicto, maneja la fusión aquí
  module: {
    rules: [
      ...(encoreConfig.module.rules || []),
      ...(customWebpackConfig.module.rules || []),
    ],
  },
  plugins: [
    ...(encoreConfig.plugins || []),
    ...(customWebpackConfig.plugins || []),
  ],
};
