/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'text1' : '#314755',
        'btn'  : '#CCCCCC'
      },
      fontFamily: {
        philosopher: ["Philosopher", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
        PlayfairSC: ["Playfair Display SC", "serif"],
      },
    },
  },
  plugins: [],
};