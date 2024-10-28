<template>
    <nav class="bg-gray-800 p-4">
        <ul class="flex justify-center space-x-4">
            <li>
                <a href="/" class="text-custom">Main</a>
            </li>
            <li>
                <a href="/about" class="text-custom">About me</a>
            </li>
            <li>
                <a href="/contacts" class="text-custom">Contacts</a>
            </li>
            <li>
                <a href="/register" class="text-custom">Register</a> <!-- Кнопка регистрации -->
            </li>
            <li>
                <a href="/login" class="text-custom">Login</a> <!-- Кнопка входа -->
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: 'Navbar'
}
</script>

<style scoped>
nav {
    background-color: #222831;
}
.text-custom {
    color: #EEEEEE;
}
</style>
