<template>
    <div class="header">
        <img src="/public/sumit-Photoroom.png" alt="SUMIT icon">
        <input type="text" class="search-field" placeholder="Search..." />
        <div class="navbar-end">
            <nuxt-link to="/" class="navbar-item">Home</nuxt-link>
            <nuxt-link to="/about-us" class="navbar-item">About Us</nuxt-link>
            <nuxt-link to="/login" class="navbar-item">Login</nuxt-link>
            <nuxt-link to="/register" class="navbar-item">Register</nuxt-link>
            <nuxt-link to="/create" class="navbar-item">Create</nuxt-link>
            <nuxt-link to="/prijava" class="navbar-item">Prijava</nuxt-link>
        </div>
    </div>
</template>

<style>
.header {
    background-color: #014479;
    height: 10vh;
    width: 100%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0, 5);
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

.search-field {
    padding: 5px 10px;
    margin: 20px auto 20px 50px;
    border: none;
    border-bottom: 1px solid grey;
    font-size: 16px;
    background-color: transparent;
    transition: all 0.3s ease;
}

.search-field:focus {
    border: 2px solid #014479;
    box-shadow: 0 0 5px rgba(1, 68, 121, 0.5);
    background-color: white;
}

.search {
    display: flex;
    gap: 10px;
}
</style>