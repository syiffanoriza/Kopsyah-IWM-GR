/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {

    container: {
      center: true,
      padding: '16px',
    },

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

      orange: {
        '900': '#E98944',
        '800': '#EDA068',
        '700': '#EEAB7B',
        '600': '#F0B68D',
        '500': '#F1C29F',
        '400': '#F2CDB2',
        '300': '#F5D8C4',
        '200': '#F6E3D7',
        '100': '#F8EFE9',
        '050': '#F8F4F1',
      },

      blue: {
        '900': '#4472E9',
        '800': '#688DED',
        '700': '#7A9BEF',
        '600': '#8DA8F0',
        '500': '#9EB6F2',
        '400': '#B0C4F4',
        '300': '#C3D1F6',
        '200': '#D5DFF8',
        '100': '#E8ECF9',
        '050': '#EFF3FA',
      }
    },
    extend: {
      screens: {
        '2xl': '1320px',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}