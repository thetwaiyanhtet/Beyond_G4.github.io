/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
const rotateY = plugin(function ({ addUtilities }) {
  addUtilities({
    '.rotate-y-180': {
      transform: "rotateY(180deg)"
    },
    '.-rotate-y-180': {
      transform: "rotateY(-180deg)"
    }
  })
})
module.exports = {
  darkMode: 'class',
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'my-purple1': '#a78bfa',
        'my-purple2': '#8b5cf6',
        "btn-color": '#314755',
        "verify-color": '#D9D9D9',
        "cart-color": '#FDFBFB',
        "btn2-color": '#F09578',
        'border-color': '#9A9A9A',
        'text-color': '#314755',
        'linear-color': '#D56EE5',
        'linear-color2': '#6F5FCE',
        'background-404': '#F2E0FB',
        'text-color': '#A61473',
        "color-primary": "#01051e",
        "color-primary-light": "#020726",
        "color-primary-dark": "#010417",
        
        "color-gray": "#333",
        "color-white": "#fff",
        "color-blob": "#A427DF"
      },
      fontFamily: {
        'philosopher': ['Philosopher', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
        'Playfair Display': ['Playfair Display', 'serif'],
        'PlayfairSC': ['Playfair Display SC', 'serif']
      },
      backgroundImage: {
        'noise_bg': ['url(./resources/img/noise.svg)'],
        'linear_dark': ['linear-gradient(179.4deg, rgb(12, 20, 69) -16.9%, rgb(71, 30, 84) 119.9%)']
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '20px',
          md: "50px"
        }
      }
    },
    plugins: [rotateY]
  }
}
