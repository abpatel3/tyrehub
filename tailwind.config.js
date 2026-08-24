/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./*.html", "./assets/js/**/*.js"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: "1rem",
        sm: "1.5rem",
        lg: "2rem",
        xl: "2rem",
        "2xl": "2.5rem",
      },
      screens: {
        sm: "640px",
        md: "768px",
        lg: "1024px",
        xl: "1170px",
        "2xl": "1170px",
      },
    },
    extend: {
      colors: {
        brand: {
          yellow: "#FFD800",
          yellowHover: "#E6C200",
          yellowLight: "#FFFBEB",
          blue: "#2F3672",
          blueHover: "#242A5A",
          blueDark: "#2F3672",
          blueLight: "#EEF2FF",
          dark: "#0F172A",
          slate: "#1E293B",
          muted: "#64748B",
          border: "#E2E8F0",
        },
      },
      fontFamily: {
        sans: ["Poppins", "sans-serif"],
        heading: ["Poppins", "sans-serif"],
        outfit: ["Outfit", "sans-serif"],
      },
      borderRadius: {
        sm: "6px",
        md: "8px",
        lg: "12px",
        xl: "16px",
        "2xl": "24px",
        card: "16px",
        pill: "9999px",
      },
      boxShadow: {
        card: "0 4px 20px -2px rgba(15, 23, 42, 0.06)",
        "card-hover": "0 12px 28px -6px rgba(47, 54, 114, 0.18)",
        "glow-yellow": "0 0 25px rgba(255, 216, 0, 0.45)",
        "glow-blue": "0 0 25px rgba(47, 54, 114, 0.3)",
      },
    },
  },
  plugins: [],
};
