/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
  safelist: [
    'scrollbar-hide-all', // Agar class selalu tersedia meskipun tidak digunakan langsung
],
}

