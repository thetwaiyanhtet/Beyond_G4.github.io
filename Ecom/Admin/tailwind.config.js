/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        philosopher: ["Philosopher", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
        playfairDisplay: ["Playfair Display", "serif"],
        PlayfairSC: ["Playfair Display SC", "serif"],
        Inter: ["Inter", "sans-serif"],
        },
        colors:{
              'bcolor' : '#D9D9D9',
              'table' : '#2535A1'
            },
    },
  },
  plugins: [],
};

