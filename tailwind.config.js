/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    "./resources/**/*.vue",
    "./resources/**/*.html",
  ],
  theme: {
    fontFamily: {
      merri: ['Merriweather', 'ui-sans-serif'],
      work: ['Work Sans', 'ui-sans-serif'],
      source: ['Source Serif Pro', 'Georgia', 'Times New Roman', 'Times', 'serif'],
      mont: ['Montserrat', 'ui-sans-serif'],
    },
    extend: {
      colors: {
        'db': 'rgb(55, 65, 81)',
        'db2': '#212427',
        'dg': '#757575',
        'dw': '#fdfdfd',
        'main-text': 'rgb(31, 41, 55)',
      },
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ]
}
