/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        body: ['Mona Sans']
      },
      width: {
        '950': '959px',
      },
    },
  },
  plugins: [],
}

