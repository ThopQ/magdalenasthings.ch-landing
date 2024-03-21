/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/**/*.blade.php'],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#ffffff',
            'base-100': '#FED8F0',
            primary: '#000000',
            secondary: '#F5A286',
            third: '#FF8BB2',
            fourth: '#FFA7E4',
            fifth: '#FFC6FF',
            sixth: '#FFE4E5',
        },
    },
    plugins: [require('@tailwindcss/typography')],
};
