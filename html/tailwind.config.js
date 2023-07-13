/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      // 3xl: "1800px",
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}