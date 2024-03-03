/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        main: "#361212",
        mainHeader: "#831414",
        opening: "#09001E",
        bgNavbar: "#760000",
        neoklasik: "#7A482F",
        realisme: "#604228",
        naturalisme: "#2D311F",
        ekspresionisme: "#2B282C",
        impresionisme: "#776E76",
        surealisme: "#542C93",
        kubisme: "#925C0E",
        kubisme2: "#210D38",
        navbarHover: "#977E2B",
        senimanBg: "#D9D9D9",
      },
      fontFamily: {
        jomhuria: ["Jomhuria", "serif"],
        nicomoji: ["Nico Moji", "sans"],
        marcellus: ["Marcellus", "serif"],
        kronaOne: ["Krona One", "sans-serif"],
        manuale: ["Manuale", "serif"],
        montserrat: ["Montserrat Alternates", "sans-serif"],
        lexend: ["Lexend", "sans-serif"],
      },
      blur: {
        opening: "200px",
      },
      scale: {
        300: "3.00",
      },
      boxShadow: {
        navbar: "-4px 4px 5px rgba(118, 0, 0, 2)",
        navbarHover: "-4px 4px 5px rgba(151, 126, 43, 2)",
        header: "0 20px 20px 20px rgba(118, 0, 0, 0.5)",
        aliran: "-4px 4px 5px rgba(0, 0, 0, 2)",
        button: "0 0 20px rgba(255, 0, 0, 0.5)",
        buttonSubmit: "0 0 20px rgba(255, 255, 255, 0.5)",
      },
      keyframes: {
        scaleLarger: {
          "0%": {
            transform: "scale(1)",
          },
          "50%": {
            transform: "scale(1.5)",
          },
          "100%": {
            transform: "scale(1)",
          },
        },
      },
      animation: {
        scaleLarger: "scaleLarger 1s infinite",
      },
      screens: {
        phone: "450px",
      },
      fontSize: {
        phone: "9px",
        timeline: "10px",
      },
    },
  },
  plugins: [require("tailwind-scrollbar")({ nocompatible: true })],
};
