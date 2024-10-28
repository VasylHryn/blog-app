import { createApp } from 'vue';
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import Register from "./components/RegisterPage.vue";
import Login from "./components/LoginPage.vue";

const app = createApp({
    components: {
        Navbar,
        Footer,
        Register,
        Login
    }
});

app.component('navbar', Navbar);
app.component('footer-component', Footer);
app.component('register-component', Register);
app.component('login-component', Login);
app.mount('#app');
