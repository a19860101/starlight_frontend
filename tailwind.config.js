/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true
    },
    fontFamily: {
      sans:['Noto Sans TC'],
      display: ['Praise']
    },
    extend: {
      // backgroundImage:{
      //   'main': "url('/images/banner.png)"
      // },
      colors: {
        'primary': '#FFE241',
        'secondary': '#FFC33C',
        'focus-p': '#9641CD',
        'focus-o': '#FFAF41',
        'danger': '#F92727',
        'success': '#04DEAD'
      }
    },
  },
  plugins: [],
}

