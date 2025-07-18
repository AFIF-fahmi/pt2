/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
      },
      spacing: {
        '144.5': '36.125rem',
        '288.75': '72.1875rem',
      },
      aspectRatio: {
        '1155/678': '1155 / 678',
      },
      rotate: {
        '30': '30deg',
      }
    }
  },
  plugins: [
    require('preline/plugin'),
  ],
}