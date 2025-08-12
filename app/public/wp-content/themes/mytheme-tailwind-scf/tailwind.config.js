// tailwind.config.js

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./template-parts/*.{php,html,js}","./*.{php,html,js}"],
  theme: {
    extend: {},
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '1rem',
        lg: '2rem',
        xl: '3rem',
        '2xl': '4rem',
      },
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'white': '#ffffff',
      'purple': '#7459ED',
      'salmon': '#F74B78',
      'title-salmon': '#F67491',
      'blue': '#3E6AEC',
      'light-grey': '#FAF9FF',
      'baby-salmon': '#FCB5C4',
      'pink': '#EB2E60',
      'light-grey': '#F5F2FF',
      'light-purple': '#BAA3F7',
      'lime': '#CCF281',
      'lime': '#CCF281',
      'canary': '#FFF5E7',
      'dark-blue': '#4731D4',
      'light-blue': '#7F6BFF',
      'princess-blue': '#1E0D89',
      'baby-pink': '#FFE7F3',
      'amber': '#F1862F',
      'baby-blue': '#E7F5FF',
      'dark-grey': '#555561',
      'baby-purple': '#E9E7FF',
      'cyan': '#3FE6C2',
      'pea': '#8ABA31',
      'not-black': '#333333',
      'title-grey': '#747479'
    }
  },
  plugins: [],
}
