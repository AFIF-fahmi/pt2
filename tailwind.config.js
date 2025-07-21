import { defineConfig } from 'tailwindcss';

export default defineConfig({
  darkMode: 'class',
  content: ['./src/**/*.{html,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        heading: {
          primary: 'var(--color-primary-heading)',
          secondary: 'var(--color-secondary-heading)',
        },
        border: {
          DEFAULT: 'var(--color-border)',
          light: 'var(--color-border-light)',
        },
        button: {
          primary: 'var(--color-button-primary)',
          secondary: 'var(--color-button-secondary)',
        },
        hover: {
          DEFAULT: 'var(--color-hover)',
          alt: 'var(--color-hover-alt)',
        },
        text: {
          body: 'var(--color-text-body)',
        },
        background: {
          DEFAULT: 'var(--color-background)',
          secondary: 'var(--color-background-secondary)',
          sage: 'var(--color-background-sage)',
          warm: 'var(--color-background-warm)',
          alt: 'var(--color-background-alt)',
          card: 'var(--color-card-background)',
        },
        accent: 'var(--color-accent)',
        success: 'var(--color-success)',
        disabled: 'var(--color-disabled)',
        highlight: 'var(--color-highlight-special)',
      },
    },
  },
  plugins: [],
});
