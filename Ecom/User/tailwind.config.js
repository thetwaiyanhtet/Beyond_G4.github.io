/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors:{
        'my-purple1' : '#a78bfa',
        'my-purple2' : '#8b5cf6'
      },
      fontFamily:{
        'philosopher' : ['Philosopher', 'sans-serif'],
      },
    },
  },
  plugins: []
};
