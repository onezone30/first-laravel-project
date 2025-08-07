// tailwind.config.js
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
        colors: {
            "black": "#060606"
        },
        fontFamily: {
            "hanken-grotesk": ['Hanken Grotesk', 'sans-serif'],
        },
        fontSize: {
            "2xs": "0.625rem"
        }
    },
  },
  plugins: [],
}
