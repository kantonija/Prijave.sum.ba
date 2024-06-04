<template>
  <section class="hero">
    <div class="button-container">
      <button class="hero-button">Otvorene prijave</button>
      <button class="hero-button">Zatvorene prijave</button>
      <button class="hero-button">Moje prijave</button>
      <button class="hero-button">Aktivno</button>
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
  max-width: 100%;
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
  margin: 20px 0;
}

.hero-button {
  background-color: rgba(16, 29, 47, 0.83);
  color: white;
  border: none;
  padding: 10px 20px;
  margin: 0 5px;
  font-size: 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 25%;
  max-width: 180px;
}

.hero-button:hover {
  background-color: rgba(16, 28, 44, 0.9);
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