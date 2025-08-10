module.exports = {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
      animation: {
        'fade-in-up': 'fadeInUp 0.8s ease-out both',
      },
      keyframes: {
        fadeInUp: {
          '0%': { opacity: 0, transform: 'translateY(10px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
      }
    },
  },
  plugins: [],
}
