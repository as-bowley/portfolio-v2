/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'bg-primary': ' #222222',
        'accent-primary': '#00C957',
        'accent-secondary': '#B0C4DE',
        'text-primary': '#F8F8F8',
        'text-secondary': '#CCCCCC',
      }, // Extend Tailwind's default colors
      fontFamily: {
        sans: 'Nunito, sans-serif',
      },
    },
  },
  plugins: [],
};

export default config;
