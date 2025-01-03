const animate = require('tailwindcss-animate');

/** @type {import('tailwindcss').Config} */
module.exports = {
	prefix: '',

	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php',
		'./resources/js/**/*.{ts,tsx,vue}',
	],

	theme: {
		container: {
			center: true,
			padding: '2rem',
			screens: {
				'2xl': '1400px',
			},
		},
		extend: {
			width: {
				128: '34rem',
				256: '68rem',
			},
			colors: {
				border: 'hsl(var(--border), <alpha-value>)',
				input: 'hsl(var(--input), <alpha-value>)',
				ring: 'hsl(var(--ring), <alpha-value>)',
				background: 'hsl(var(--background), <alpha-value>)',
				foreground: 'hsl(var(--foreground), <alpha-value>)',
				primary: {
					DEFAULT: 'hsl(var(--primary), <alpha-value>)',
					foreground: 'hsl(var(--primary-foreground), <alpha-value>)',
				},
				secondary: {
					DEFAULT: 'hsl(var(--secondary), <alpha-value>)',
					foreground: 'hsl(var(--secondary-foreground), <alpha-value>)',
				},
				destructive: {
					DEFAULT: 'hsl(var(--destructive), <alpha-value>)',
					foreground: 'hsl(var(--destructive-foreground), <alpha-value>)',
				},
				muted: {
					DEFAULT: 'hsl(var(--muted), <alpha-value>)',
					foreground: 'hsl(var(--muted-foreground), <alpha-value>)',
				},
				accent: {
					DEFAULT: 'hsl(var(--accent), <alpha-value>)',
					foreground: 'hsl(var(--accent-foreground), <alpha-value>)',
				},
				popover: {
					DEFAULT: 'hsl(var(--popover), <alpha-value>)',
					foreground: 'hsl(var(--popover-foreground), <alpha-value>)',
				},
				card: {
					DEFAULT: 'hsl(var(--card), <alpha-value>)',
					foreground: 'hsl(var(--card-foreground), <alpha-value>)',
				},
			},
			borderRadius: {
				xl: 'calc(var(--radius) + 4px)',
				lg: 'var(--radius)',
				md: 'calc(var(--radius) - 2px)',
				sm: 'calc(var(--radius) - 4px)',
			},
			keyframes: {
				'accordion-down': {
					from: { height: 0 },
					to: { height: 'var(--radix-accordion-content-height)' },
				},
				'accordion-up': {
					from: { height: 'var(--radix-accordion-content-height)' },
					to: { height: 0 },
				},
				'collapsible-down': {
					from: { height: 0 },
					to: { height: 'var(--radix-collapsible-content-height)' },
				},
				'collapsible-up': {
					from: { height: 'var(--radix-collapsible-content-height)' },
					to: { height: 0 },
				},
			},
			animation: {
				'accordion-down': 'accordion-down 0.2s ease-out',
				'accordion-up': 'accordion-up 0.2s ease-out',
				'collapsible-down': 'collapsible-down 0.2s ease-in-out',
				'collapsible-up': 'collapsible-up 0.2s ease-in-out',
			},
			fontFamily: {
				sans: 'var(--sans-font)',
				serif: 'var(--serif-font)',
				mono: 'var(--mono-font)',
			},
		},
	},
	plugins: [animate, require('@tailwindcss/forms')],
};
