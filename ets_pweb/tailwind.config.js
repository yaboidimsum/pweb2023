/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./job.html","./page.html"],
  theme: {
    extend: {
      screens: {
        "2xl": "2160px",
      },
    },
    plugins: [],
  },
};
