/** @type {import('tailwindcss').Config} */
import forms from '@tailwindcss/forms';

export default {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        primary: '#85012D',
        secondary: '#D50037',
        success: '#4CAF50',
        warning: '#FFC107',
        info: '#00BCD4',
        dark: '#0B0D0C',
        light: '#E8ECEF',
        gray: '#D9DEE2',
        'dark-gray': '#353535',
      },
      fontFamily: {
        'space-grotesk': ['Space Grotesk', 'sans-serif'],
      },
    },
  },
  plugins: [forms],
};
