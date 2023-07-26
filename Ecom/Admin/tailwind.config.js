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
    },
  },
  plugins: [],
};

