/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode : ['class','[data-mode="dark"]'],
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
        'text-color' : '#314755',
        'linear-color' : '#D56EE5',
        'linear-color2' : '#6F5FCE',
        'background-404' : '#F2E0FB',
        'text-color': '#A61473'
      },
      fontFamily:{
        'philosopher' : ['Philosopher', 'sans-serif'],
        'poppins':['Poppins', 'sans-serif'],
        'Playfair Display': ['Playfair Display', 'serif'],
        'PlayfairSC': ['Playfair Display SC', 'serif']
      },
      styles: {
        '.sr-only': {
          position: 'absolute',
          width: '1px',
          height: '1px',
          padding: '0',
          margin: '-1px',
          overflow: 'hidden',
          clip: 'rect(0, 0, 0, 0)',
          'white-space': 'nowrap',
          'border-width': '0',
        },
      },
    },
  },
  plugins: []
};

