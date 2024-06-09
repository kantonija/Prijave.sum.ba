<template>
  <section class="hero">
    <div class="button-container">
      <button class="hero-button">Button 1</button>
      <button class="hero-button">Button 2</button>
      <button class="hero-button">Button 3</button>
      <button class="hero-button">Button 4</button>
    </div>
    <div class="hero-content">
      <h1>Welcome to Switch</h1>
      <p>Your gateway to innovative technology and solutions.</p>
    </div>
  </section>
</template>

<style scoped>
.hero {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: white;
  color: black;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
}

.hero-content {
  max-width: 800px;
}

.hero h1 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.hero p {
  font-size: 1.2rem;
  margin-bottom: 40px;
}

.button-container {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.hero-button {
  background-color: rgba(16, 29, 47, 0.83);
  color: white;
  border: none;
  padding: 10px 20px;
  margin: 0 10px;
  font-size: 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.hero-button:hover {
  background-color: rgba(16, 28, 44, 0.9);
}

.cards-container {
  position: relative;
}

.arrow-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: transparent;
  border: none;
  color: #000;
  font-size: 20px;
  cursor: pointer;
}

.arrow-button.left {
  left: 10px;
}

.arrow-button.right {
  right: 10px;
}

.cards-wrapper {
  overflow: hidden;
}

.cards {
  display: flex;
  transition: transform 0.3s ease;
}

.card {
  flex: 0 0 auto;
  /* Prevent cards from growing */
  width: 300px;
  /* Adjust card width as needed */
  margin-right: 20px;
  /* Space between cards */
}

.card img {
  width: 100%;
  /* Ensure image fills its container */
}

@media (max-width: 768px) {
  .hero h1 {
    font-size: 2rem;
  }

  .hero p {
    font-size: 1rem;
  }
}
</style>