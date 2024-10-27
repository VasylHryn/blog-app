import { createApp } from 'vue';
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';

const app = createApp({
    components: {
        Navbar,
        Footer
    }
});

app.component('navbar', Navbar);
app.component('footer-component', Footer);
app.mount('#app');
