/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'text1' : '#314755',
        'btn'   : '#CCCCCC',
        'text2' : '#7132D7',
        'bg-color' : '#D9D9D9',
        'text-bg' : '#282932',
        'text3' : '#8899A8'
 
      },
      fontFamily: {
        philosopher: ["Philosopher", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
        playfairDisplay: ["Playfair Display", "serif"],
      },
    },
  },
  plugins: []
};