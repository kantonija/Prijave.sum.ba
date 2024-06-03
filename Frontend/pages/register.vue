<template>
  <div class="container">
    <p>Sign Up</p>
    <div class="login-container">
      <form class="login-form">
        <div class="input-group">
          <input type="name" id="name" name="name" placeholder="Enter your name" required>
          <div class="label-div">
            <NameIcon class="icon2" /> <label for="name" class="label">Name</label>
          </div>
        </div>
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
        <div class="input-group">
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
          <div class="label-div">
            <PasswordIcon class="icon2" /> <label for="password" class="label">Confirm password</label>
          </div>
        </div>
        <div class="submit-div">
          <div class="input-container date-div">
            <label for="date">Date of birth: </label>
            <input type="date" placeholder="Date of Birth">
          </div>
          <button type="submit" class="login-button">
            <ArrowRightIcon class="icon-arrow" />
          </button>
        </div>
      </form>
    </div>
    <img src="/public/sumit-Photoroom.png" alt="SUMIT icon" class="large">
  </div>
</template>

<script setup>
import MailIcon from '~/assets/icons/mail.svg'
import PasswordIcon from '~/assets/icons/password.svg'
import ArrowRightIcon from '~/assets/icons/arrow-right.svg'
import NameIcon from '~/assets/icons/name.svg'
</script>

<style scoped>
.container {
  background-color: #101D2F;
  display: flex;
  flex-direction: column;
  padding-top: 20px;
  align-items: center;
}

.login-form {
  background-color: #182A44;
  padding: 30px;
  border-radius: 8px;
  border: 3px solid white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 400px;
  text-align: center;
}

p {
  font-size: 48px;
  margin-right: 70%;
}

.input-group {
  margin-bottom: 15px;
  margin-right: 50px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.input-group label {
  display: block;
  margin-bottom: 15px;
  color: #ffffff;
}

.input-group input {
  width: 70%;
  padding: 10px;
  margin-left: 50px;
  border: none;
  border-bottom: 2px solid #ccc;
  background: none;
  font-size: 16px;
}

.input-group input:focus {
  outline: none;
  color: white;
}

.input-group input:focus::placeholder {
  opacity: 0;
}

.checkbox-container {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin-left: 50px;

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
  margin: 10px 0;
}

.icon2 {
  width: 24px;
  height: 24px;
  margin: 0 10px;
}

.label {
  font-size: 18px;
}

.submit-div {
  display: flex;
  justify-content: space-between;
}

.large {
  width: 280px;
  height: 160px;
  margin-left: 70%;
}

.date-div {
  display: flex;
  flex-direction: column;
}

.input-container input[type="date"] {
  background: none;
  border: none;
  border-bottom: 1px solid white;
  color: white;
  text-align: left;
  margin-top: 10px;
}

.input-container input[type="date"]:focus {
  outline: none;
}

.input-container input[type="date"]::-webkit-calendar-picker-indicator {
  filter: invert(1); /* Invert the color to white */
  opacity: 1;
  cursor: pointer;
}
</style>
