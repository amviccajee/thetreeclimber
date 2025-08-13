module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./src/**/*.{js,jsx,ts,tsx}"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Open Sans"', 'sans-serif'],
      },
      colors: {
        pea: '#A7F3D0',
        seaGreen: '##00e091',
        forest: '#00735c',
        seafoam: '#c1d9b7',
        scallop: '#e5a298',
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '0.25rem',
        lg: '1.25rem',
      },
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
      },
    },
  },
  plugins: [],
}
