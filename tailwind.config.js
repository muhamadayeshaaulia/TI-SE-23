tailwind.config = {
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'custom-purple': '#753a88',
        'custom-pink': '#cc2b5e',
        'custom-orange': 'tomato',
      },
      animation: {
        passport: 'passport 5s linear 4s infinite alternate',
        'top-blue': 'top-blue 4s linear 2s infinite',
        'top-orange': 'top-orange 4s linear 2s infinite',
        'bottom-pink': 'bottom-pink 4s linear 2s infinite',
      },
      keyframes: {
        passport: {
          '0%': { borderColor: '#cc2b5e' },
          '25%': { borderColor: 'rebeccapurple' },
          '50%': { borderColor: 'tomato' },
          '75%': { borderColor: 'yellow' },
          '100%': { borderColor: 'green' },
        },
        'top-blue': {
          '0%': { top: '7%', opacity: '1' },
          '20%': { top: '30%', opacity: '0.7' },
          '40%': { top: '50%', opacity: '0.4' },
          '50%': { top: '60%', opacity: '0.1' },
          '60%': { top: '50%', opacity: '0.4' },
          '80%': { top: '30%', opacity: '0.7' },
          '100%': { top: '5%', opacity: '1' },
        },
        'top-orange': {
          '0%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(30px)' },
          '100%': { transform: 'translateY(0)' },
        },
        'bottom-pink': {
          '0%': { transform: 'scale(1)' },
          '50%': { transform: 'scale(1.15)' },
          '100%': { transform: 'scale(1)' },
        },
      }
    }
  }
}