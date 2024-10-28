import '../css/app.css';
import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import RegisterPage from './components/RegisterPage.vue';
import LoginPage from './components/LoginPage.vue';

const app = createApp({});

// Зарегистрируйте ваши компоненты
app.component('navbar', Navbar);
app.component('footer-component', Footer);
app.component('register-page', RegisterPage);
app.component('login-page', LoginPage);

// Монтируем приложение на элемент с id "app"
app.mount('#app');
