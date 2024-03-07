/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      primary: {
        '100': '#00A500',
        '80': '#32B632',
        '70': '#4BBE4C',
        '60': '#64C764',
        '50': '#7CCF7D',
        '40': '#95D897',
        '30': '#AFE0B0',
        '20': '#C7E9C9',
        '10': '#E1F1E2',
        '05': '#ECF5EE',         
      },
     
      red: {
        '100': '#E94E44',
        '80': '#ED7068',
        '70': '#EE817B',
        '60': '#F0938D',
        '50': '#F1A49F',
        '40': '#F2B5B2',
        '30': '#F5C6C4',
        '20': '#F6D8D7',
        '10': '#F8E9E9',
        '05': '#F8F1F1',  
      },

      yellow: {
        '100': '#E9BB44',
        '80': '#EDC868',
        '70': '#EECE7B',
        '60': '#F0D48D',
        '50': '#F1DA9F',
        '40': '#F2E1B2',
        '30': '#F5E7C4',
        '20': '#F6EDD7',
        '10': '#F8F4E9',
        '05': '#F8F6F1',
      }
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

