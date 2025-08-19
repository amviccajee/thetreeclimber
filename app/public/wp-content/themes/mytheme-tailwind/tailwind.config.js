module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./src/**/*.{js,jsx,ts,tsx}"
  ],
  theme: {
    extend: {
      fontFamily: {
        fira: ['Fira Sans', 'sans-serif'],
        lora: ['Lora', 'serif'],
      },
      colors: {
        pea: '#A7F3D0',
        seaGreen: '#73c496',
        offwhite: '#f7f5d5',
        forest: '#00735c',
        seafoam: '#c1d9b7',
        scallop: '#fa9687',
        lightGrey: '#f0f0f0',
        brightgreen: '#d9ff85',
        textGrey: '#838385',
        greentitle: '#00c87a',
        pink: '#ffcccf',
        green: '#4d6658'
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
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
