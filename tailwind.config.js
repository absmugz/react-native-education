module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        colors: {
            darkBackground: '#20232a',
            lightBackground: '#282c34',
            brand: '#61dafb',
        }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
      require('@tailwindcss/aspect-ratio'),
  ]
}
