const app = Vue.createApp({
    data() {
        return {
            activeSection: null
        };
    },
    methods: {
        showSection(section) {
            this.activeSection = section;
        }
    }
});

app.mount('#app');
