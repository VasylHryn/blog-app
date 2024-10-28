<template>
    <div>
        <h2>Вход</h2>
        <form @submit.prevent="login">
            <div>
                <label for="email">Email:</label>
                <input type="email" v-model="form.email" required>
            </div>
            <div>
                <label for="password">Пароль:</label>
                <input type="password" v-model="form.password" required>
            </div>
            <button type="submit">Войти</button>
        </form>
        <div v-if="error" class="error">{{ error }}</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
                password: ''
            },
            error: null
        };
    },
    methods: {
        async login() {
            this.error = null;
            try {
                const response = await axios.post('/login', this.form);
                alert(response.data.message);
            } catch (error) {
                if (error.response && error.response.data) {
                    this.error = error.response.data;
                } else {
                    this.error = 'Произош ла ошибка при входе.';
                }
            }
        }
    }
};
</script>
