import { resolve } from 'path'
import FullReload from 'vite-plugin-full-reload'

export default {
  root: '.',
  plugins: [
    FullReload(['./**/*.php']),
  ],
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
  server: {
    proxy: {
      // Proxy your LocalWP WordPress site
      '/': {
        target: 'http://thetreeclimber.local', // change to your LocalWP site domain
        changeOrigin: true,
        secure: false,
      },
    }
  },
  css: {
    postcss: {
      plugins: [require('tailwindcss'), require('autoprefixer')]
    }
  }
}
