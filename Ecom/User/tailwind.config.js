/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: ['class', '[data-mode="dark"]'],
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'my-purple1' : '#a78bfa',
        'my-purple2' : '#8b5cf6',
        "btn-color"  :  '#314755',
        "verify-color" : '#D9D9D9',
        "cart-color" :'#FDFBFB',
        "btn2-color" :'#F09578',
        'border-color' : '#9A9A9A',
        'text-color' : '#314755'
      },
      fontFamily:{
        'philosopher' : ['Philosopher', 'sans-serif'],
        'poppins':['Poppins', 'sans-serif'],
        'Playfair Display': ['Playfair Display', 'serif']
      },
    },
  },
  plugins: []
};

