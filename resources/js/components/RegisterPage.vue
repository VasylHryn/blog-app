<template>
    <div>
        <h2>Регистрация</h2>
        <form @submit.prevent="register">
            <div>
                <label for="name">Имя:</label>
                <input type="text" v-model="form.name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" v-model="form.email" required>
            </div>
            <div>
                <label for="password">Пароль:</label>
                <input type="password" v-model="form.password" required>
            </div>
            <div>
                <label for="password_confirmation">Подтверждение пароля:</label>
                <input type="password" v-model="form.password_confirmation" required>
            </div>
            <button type="submit" :disabled="loading">
                <span v-if="loading">Загрузка...</span>
                <span v-else>Зарегистрироваться</span>
            </button>
        </form>
        <div v-if="error" class="error">{{ error }}</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
            error: null,
            loading: false
        };
    },
    methods: {
        async register() {
            this.error = null;
            this.loading = true;


            if (this.form.password !== this.form.password_confirmation) {
                this.error = 'Пароли не совпадают.';
                this.loading = false;
                return;
            }

            try {
                const response = await axios.post('/register', this.form);
                alert(response.data.message);

            } catch (error) {
                if (error.response && error.response.data.errors) {

                    this.error = Object.values(error.response.data.errors).flat().join(', ');
                } else {
                    this.error = 'Произошла ошибка при регистрации.';
                }
            } finally {
                this.loading = false;
            }
        }
    }
};
</script>

<style>
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

h2 {
    text-align: center;
}

div {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:disabled {
    background-color: #ccc; /* Цвет кнопки при отключении */
    cursor: not-allowed; /* Указатель при отключении */
}

button:hover:not(:disabled) {
    background-color: #0056b3; /* Цвет кнопки при наведении */
}

.error {
    color: red;
    margin-top: 10px;
    text-align: center;
}
</style>
