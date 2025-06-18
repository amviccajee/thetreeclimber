import { resolve } from 'path'

export default {
  build: {
    rollupOptions: {
      input: {
        style: resolve(__dirname, 'assets/css/style.css'),
      },
      output: {
        assetFileNames: 'css/[name][extname]',
      }
    },
    outDir: 'dist',
    emptyOutDir: true,
  },
  css: {
    postcss: {
      plugins: [require('tailwindcss'), require('autoprefixer')]
    }
  }
}
