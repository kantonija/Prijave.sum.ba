<template>
  <div>
    <div class="header">
      <nuxt-link to="/"><img src="/public/sumit-Photoroom.png" alt="SUMIT icon" class="logo"></nuxt-link>
      <input type="text" class="search-field" placeholder="Search..." />
      <div class="navbar-end">
        <nuxt-link to="/" class="navbar-item">Home</nuxt-link>
        <nuxt-link to="/about-us" class="navbar-item">About Us</nuxt-link>
        <nuxt-link to="/login" class="navbar-item">Login</nuxt-link>
        <nuxt-link to="/register" class="navbar-item">Register</nuxt-link>
        <nuxt-link to="/create" class="navbar-item">Create</nuxt-link>
        <nuxt-link to="/prijava" class="navbar-item">Prijava</nuxt-link>
      </div>
      <div class="hamburger" @click="toggleMenu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="mobile-menu" v-show="menuOpen">
      <nuxt-link to="/" class="mobile-nav-item">Home</nuxt-link>
      <nuxt-link to="/about-us" class="mobile-nav-item">About Us</nuxt-link>
      <nuxt-link to="/login" class="mobile-nav-item">Login</nuxt-link>
      <nuxt-link to="/register" class="mobile-nav-item">Register</nuxt-link>
      <nuxt-link to="/create" class="mobile-nav-item">Create</nuxt-link>
      <nuxt-link to="/prijava" class="mobile-nav-item">Prijava</nuxt-link>

    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const menuOpen = ref(false);
const toggleMenu = () => {
  menuOpen.value = !menuOpen.value;
};
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden;
}

.header {
  background-color: #014479;
  height: 10vh;
  width: 100vw;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  z-index: 999;
}

.logo {
  height: 100%;
  max-height: 80px;
  width: auto;
}

.search-field {
  padding: 5px 10px;
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

.navbar-end {
  display: flex;
  align-items: center;
}

.navbar-item {
  color: white;
  text-decoration: none;
  font-size: 1.2rem;
  margin: 0 20px;
}

.navbar-item:hover {
  color: rgb(182, 182, 182);
  cursor: pointer;
}

.hamburger {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.hamburger span {
  height: 3px;
  width: 25px;
  background-color: white;
  margin: 4px;
  transition: all 0.3s ease;
}

.mobile-menu {
  display: none;
  flex-direction: column;
  background-color: #014479;
  padding: 20px;
}

.mobile-nav-item {
  color: white;
  text-decoration: none;
  font-size: 1.25rem;
  margin: 10px 0;
}

.mobile-nav-item:hover {
  color: rgb(182, 182, 182);
}

@media (max-width: 768px) {
  .navbar-end {
    display: none;
  }

  .hamburger {
    display: flex;
  }

  .mobile-menu {
    display: flex;
  }
}
</style>
