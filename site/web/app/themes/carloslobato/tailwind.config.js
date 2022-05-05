module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
    },
    extend: { 
      colors: {
        pros90orange: '#F6913A',
        pros90blue: '#357CBF',
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
