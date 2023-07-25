/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'text1' : '#314755',
        'btn'   : '#CCCCCC',
        'text2' : '#7132D7'

      },
      fontFamily:{
        'philosopher' : ['Philosopher', 'sans-serif'],
        'poppins':['Poppins', 'sans-serif'],
        'Playfair Display': ['Playfair Display', 'serif'],
        'PlayfairSC': ['Playfair Display SC', 'serif']
      }
    },
  },
  plugins: []
};