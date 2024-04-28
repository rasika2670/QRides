/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}","*","./*.{html,js,css,json,js}","*/*"],
  theme: {
    extend: {
      fontFamily:{
        poppins:['Poppins', "sans-serif"],
        playfair:['Playfair Display'],
        rubik: ['Rubik', 'sans-serif'],
        marcellus : ['Marcellus' , 'serif'] ,
      },
      colors:{
        Bpurple:"#22223b",
        Twhite:"#F2E9E4",
        Mpurple:"#39395e",
        Bsilver:"#d9d9d9",
        NBlue:"#4a4e69",
        Bpink:"#9a8c98",
        Blacky:"#24262b",
        Lpurple:" #757A9D",
        Violet : "#6854A0",
        Lviolet : "#D4C3F5" ,
      }
    },
  },
  plugins: [],
}