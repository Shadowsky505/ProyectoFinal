/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        prim: {
          50: '#79C0DB',
          100: '#6CADC6',
          200: '#5E9AB0',
          300: '#51869B',
          400: '#447385',
          500: '#366070',
          600: '#294D5B',
          700: '#1B3945',
          800: '#0E2630',
        },
        sec: {
          50: '#FAF0D7',
          100: '#F9E7BC',
          200: '#F7DDA1',
          300: '#F6D486',
          400: '#F4CB6C',
          500: '#F3C151',
          600: '#F2B836',
          700: '#F0AE1B',
          800: '#EFA500',
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}