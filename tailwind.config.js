/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      sans: 'Plus Jakarta Sans'
    },
    colors: {
      primary: {
        '900': '#00A500',
        '800': '#32B632',
        '700': '#4BBE4C',
        '600': '#64C764',
        '500': '#7CCF7D',
        '400': '#95D897',
        '300': '#AFE0B0',
        '200': '#C7E9C9',
        '100': '#E1F1E2',
        '050': '#ECF5EE',         
      },
     
      red: {
        '900': '#E94E44',
        '800': '#ED7068',
        '700': '#EE817B',
        '600': '#F0938D',
        '500': '#F1A49F',
        '400': '#F2B5B2',
        '300': '#F5C6C4',
        '200': '#F6D8D7',
        '100': '#F8E9E9',
        '050': '#F8F1F1',  
      },

      yellow: {
        '900': '#E9BB44',
        '800': '#EDC868',
        '700': '#EECE7B',
        '600': '#F0D48D',
        '500': '#F1DA9F',
        '400': '#F2E1B2',
        '300': '#F5E7C4',
        '200': '#F6EDD7',
        '100': '#F8F4E9',
        '050': '#F8F6F1',
      },
    },
    extend: {
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

