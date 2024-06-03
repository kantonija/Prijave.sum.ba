<template>
    <div class="header">
        <img src="/public/sumit-Photoroom.png" alt="Switch icon" />
        <div class="navbar-end">
            <nuxt-link to="/" class="navbar-item">Home</nuxt-link>
            <nuxt-link to="/about-us" class="navbar-item">About Us</nuxt-link>
            <nuxt-link to="/login" class="navbar-item">Login</nuxt-link>
            <nuxt-link to="/register" class="navbar-item">Register</nuxt-link>
        </div>
    </div>
</template>

<style>
.header {
    background-color: #014479;
    height: 10vh;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0,5);
    display: flex;
    justify-content: space-between;
}

img {
    padding-left: 20px;
}
.navbar-end {
    position: relative;
    top: 25%;
    right: 10%;
}

.navbar-item {
    color: white;
    text-decoration: none;
    font-size: 25px;
    margin: 0 20px;
}

.navbar-item:hover {
    color: rgb(182, 182, 182);
    cursor: pointer;
}

</style>