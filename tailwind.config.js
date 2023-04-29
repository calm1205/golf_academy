/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,php}'],
  theme: {
    extend: {
      colors: {
        primary: {
          exLight: '#EDF8FF',
          light: '#29B0FC',
          default: '#0894E3',
          dark: '#003350',
        },
      },
    },
    screens: {
      phone: { max: '768px' },
      tablet: { max: '1280px' },
      desktop: { max: '9999px' },
    },
    borderWidth: {
      DEFAULT: '1px',
      0: '0',
      2: '2px',
      3: '3px',
      4: '4px',
      6: '6px',
      8: '8px',
      30: '30px',
      32: '32px',
      38: '38px',
      40: '40px',
    },
  },
};
