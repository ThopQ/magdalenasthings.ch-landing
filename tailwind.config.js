/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/**/*.blade.php'],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#ffffff',
            'base-100': '#FFF5F6',
            'base-200': '#F7F5DD',
            primary: '#000000',
            secondary: '#F17581',
            third: '#FF8BB2',
            fourth: '#FFA7E4',
            fifth: '#FFC6FF',
            sixth: '#FFE4E5',
        },
    },
    plugins: [require('@tailwindcss/typography')],
};
