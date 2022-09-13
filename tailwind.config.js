/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        'brand-primary': '#df0070',
        'brand-secondary': '#707276',
        'brand-primary-dark': '#660134'
      }
    },
  },
  plugins: [],
}
