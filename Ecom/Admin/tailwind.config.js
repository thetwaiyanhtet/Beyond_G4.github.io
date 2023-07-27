/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        philosopher: ["Philosopher", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
        },
        colors:{
              'bcolor' : '#D9D9D9',
              'table'  : '#2535A1',
              'bgcolor2' : '#7D6C56',
              'bgcolor3' : '#87A6F5'
            },
    },
  },
  plugins: [],
};

