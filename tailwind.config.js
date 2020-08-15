module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      extend: {
          colors: {}
      },
      fontFamily: {
          serif: ['Nunito', 'sans-serif'],
      }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
