module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        pros90orange: '#F78F22',
        prosorangedark: '#F45F2D',
        pros90blue: '#17274F',
        bluedays: '#2A5E80',
        pros90lightblue: '#2EAFE6',
        pros90gray: '#F4F4F4',
        logoblue: '#1346AC',
        logolightblue: '#2EAFE6',
        logoorange: '#F78F22',
      },
      borderRadius: {
        extraLarge: '12rem',
        Large: '8rem'
      },
      fontFamily: {
        rutanblack: ["rutanblack", "sans-serif"],
        rutanmedium: ["rutanmedium", "sans-serif"],
        probold: ["source_sans_probold", "sans-serif"],
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography'),
    require('tailwindcss-debug-screens')
  ],
};
