module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        pros90orange: '#F6913A',
        pros90blue: '#357CBF',
        pros90gray: '#F5F3FE',
      },
      borderRadius: {
        extraLarge: '12rem'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
