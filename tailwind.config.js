const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/components/*.vue"
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Nunito", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "my-orange": "#F99C47",
        "my-red": "#DC3545",
        "my-blue": "#3A82EE",
      },
    },
    screens: {
      sp: "320px",
      tab: "520px",
      pc: "960px",
    },
  },

  plugins: [require("@tailwindcss/forms")],
};
