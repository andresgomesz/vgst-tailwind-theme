/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {},
  },
  safelist: [
    'text-[#9FCE00]',
    'text-white',
    'font-semibold',
    'text-[16px]',
    'leading-[22px]',
  ],
}
