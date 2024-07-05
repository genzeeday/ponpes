/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "hijau1":"#34A853",
        "hijau2":"#218647"
      }
    },
  },
  plugins: [],
}