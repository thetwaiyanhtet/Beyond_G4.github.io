/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        sidebar: "#085FC6",
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