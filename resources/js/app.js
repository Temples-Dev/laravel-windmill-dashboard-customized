import './bootstrap';

import Alpine from 'alpinejs';
import Chart from 'chart.js/auto'



window.Alpine = Alpine;

Alpine.store('darkModeStore', {
    dark: window.matchMedia('(prefers-color-scheme: dark)').matches,

    init() {

        // Check local storage for the dark mode state
        const storedDarkMode = localStorage.getItem('dark');
        if (storedDarkMode !== null) {
            this.dark = JSON.parse(storedDarkMode);
            this.updateDarkMode();
        }

        
    },

    toggleDarkMode() {
        this.dark = !this.dark;
        this.updateDarkMode();
    },

    updateDarkMode() {

        if (this.dark) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }

        // Store the state in local storage
        localStorage.setItem('dark', JSON.stringify(this.dark));
    }
});





Alpine.start();



window.Chart = Chart;



