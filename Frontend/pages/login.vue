<template>
  <div class="container">
    <NuxtLink to="/" class="nuxt-link">Home</NuxtLink>
    <p>Login</p>
    <div class="login-container">
      <form class="login-form">
        <div class="input-group">
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
          <div class="label-div">
            <MailIcon class="icon2" /> <label for="email" class="label">Mail</label>
          </div>
        </div>
        <div class="input-group">
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
          <div class="label-div">
            <PasswordIcon class="icon2" /> <label for="password" class="label">Password</label>
          </div>
        </div>
        <div class="submit-div">
          <div class="checkbox-container">
            <input type="checkbox" id="stay-signed-in" name="stay-signed-in">
            <label for="stay-signed-in" class="checkbox-label">Stay signed in</label>
          </div>
          <button type="submit" class="login-button">
            <ArrowRightIcon class="icon-arrow" />
          </button>
        </div>
      </form>
    </div>
    <NuxtLink to="/"><img src="/public/sumit-Photoroom.png" alt="SUMIT icon" class="large"></NuxtLink> 
  </div>
</template>

<script setup>
import MailIcon from '~/assets/icons/mail.svg'
import PasswordIcon from '~/assets/icons/password.svg'
import ArrowRightIcon from '~/assets/icons/arrow-right.svg'
</script>

<style scoped>
html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
}

* {
  box-sizing: border-box;
}

.container {
  background-color: #101D2F;
  min-height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  padding-top: 5px;
  align-items: center;
  color: white;
}

.nuxt-link {
  text-decoration: none;
  color: white;
  align-self: center;
  margin-right: 20px;
}

.nuxt-link:hover {
  color: rgb(172, 172, 172);
  text-decoration: underline;
}

p {
  font-size: 3.5em;
  margin-top: 20px;
  margin-right: 70%;
}

.login-container {
  display: flex;
  justify-content: center;
  width: 100%;
  padding: 20px;
}

.login-form {
  background-color: #182A44;
  padding: 20px;
  border-radius: 8px;
  border: 3px solid white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
}

.input-group {
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group label {
  display: block;
  margin-top: 5px;
  color: #ffffff;
}

.input-group input {
  width: 100%;
  padding: 10px;
  border: none;
  border-bottom: 2px solid #ccc;
  background: none;
  font-size: 16px;
  color: white;
}

.input-group input:focus {
  outline: none;
}

.input-group input::placeholder {
  color: #ccc;
}

.checkbox-container {
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.checkbox-label {
  color: white;
  font-size: 14px;
  margin-left: 5px;
}

.login-button {
  background-color: #101D2F;
  border: none;
  border-radius: 5px;
  width: 50px;
  height: 50px;
  cursor: pointer;
}

.login-button:hover {
  background-color: #09101a;
}

.label-div {
  display: flex;
  align-items: center;
  margin-top: 10px;
}

.icon2 {
  width: 24px;
  height: 24px;
  margin-right: 10px;
}

.label {
  font-size: 18px;
}

.submit-div {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  margin-top: 20px;
}

.large {
  width: 80%;
  max-width: 280px;
  height: auto;
  margin-top: 10px;
}

@media (max-width: 768px) {
  .container {
    padding: 10px;
  }

  .nuxt-link {
    align-self: center;
    margin-right: 0;
  }

  p {
    text-align: center;
    margin: 10px 0;
  }

  .login-form {
    padding: 20px;
    width: 90%;
  }

  .submit-div {
    flex-direction: column;
    align-items: center;
  }

  .checkbox-container {
    justify-content: center;
    margin-bottom: 10px;
  }

  .login-button {
    width: 100%;
    max-width: 200px;
    height: 40px;
  }
}

@media (max-width: 480px) {
  .login-form {
    padding: 15px;
    width: 95%;
  }

  .login-button {
    width: 100%;
    height: 40px;
  }

  .submit-div {
    flex-direction: column;
  }
}
</style>
