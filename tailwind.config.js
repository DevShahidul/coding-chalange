/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'), 
    require('@tailwindcss/typography')
  ],
  darkMode: 'class',
  variants: {
    display: ['responsive', 'group-hover', 'group-focus'],
  },
}
