<template>
  <section class="hero">
    <h1> Napravite novu radionicu </h1>
    <div class="hero-content">
      <form id="Radionica" @submit.prevent="submitForm">
        <h2> Osnovne informacije o prijavi: </h2>
        Naziv vaše prijave: <input type="text" placeholder="Unesite naziv..."/><br/>
        Dodatne informacije o prijavi: <input type="text" placeholder="Unesite opis..."/><br/>
        Ime i prezime voditelja: <input type="text" placeholder="Unesite voditelja..."/><br/>
        Datum početka: <input type="date"/><br/>
        Datum završetka: <input type="date"/><br/>
        Rok za prijave: <input type="datetime-local"/>
        <h2> Lista pitanja za prijavu: </h2>

        <div class='testni'>
          <input type='text' class='dugiteksti' placeholder='Unesite naziv pitanja...'/>
          <select class='VrstePitanja' @change='promjenaVrste'>
            <option value='KratkiOdgovor'> Kratki Odgovor </option>
            <option value='ViseTocnih'> Vise Tocnih </option>
            <option value='JedanOd'> Jedan Od </option>
          </select>
          <button class="Closer" @click="Destroying">X</button>
        </div>
        <button @click="NoviDiv">Dodaj još jedno pitanje</button>
        <button @click='submitaj'> Napravi prijavu </button>
      </form>
    </div>
  </section>
</template>

<script>
export default {
  methods: {



    promjenaVrste(event) {
      let e = event.target.parentNode;
      let child = e.childNodes[3];
      while (child) {
        e.removeChild(child);
        child = e.childNodes[3];
      }
      if ((event.target.value == "JedanOd") || (event.target.value == "ViseTocnih")) {
        this.dodajOpciju(e);
      }
    },



    dodajOpciju(e) {
      let pom = e.appendChild(document.createElement("div"));
      pom.appendChild(document.createTextNode("Opcija: "));
      pom.appendChild(document.createElement("input"));
      pom.appendChild(document.createElement("button"));
      pom.lastElementChild.innerHTML = "Dodaj još jednu opciju";
      pom.lastElementChild.onclick = (event) => {
        event.preventDefault();
        this.dodajOpciju(e);
      };
      pom.appendChild(document.createElement("button"));
      pom.lastElementChild.innerHTML = "Izbriši ovu opciju";
      pom.lastElementChild.onclick = (event) => {
        event.preventDefault();
        e.removeChild(pom);
        if (e.childNodes.length == 3) this.dodajOpciju(e);
      };
    },



    NoviDiv(event) {
  let forma = document.getElementById("Radionica");
  let pom = forma.lastElementChild.previousSibling;
  let pom2 = document.createElement("div");
  pom2.innerHTML = "<input type='text' data-v-0550afab class='dugiteksti' placeholder='Unesite naziv pitanja...'/><select data-v-0550afab class='VrstePitanja'><option data-v-0550afab value='KratkiOdgovor'> Kratki Odgovor </option><option data-v-0550afab value='ViseTocnih'> Vise Tocnih </option><option data-v-0550afab value='JedanOd'> Jedan Od </option></select><button class='Closer' data-v-0550afab @click='Destroying'>X</button>";
  forma.insertBefore(pom2, forma.lastElementChild.previousSibling);
  
  let selectElement = pom2.querySelector(".VrstePitanja");
  selectElement.addEventListener("change", this.promjenaVrste);
  let pomocni = pom2.querySelector(".Closer");
  pomocni.addEventListener("click", this.Destroying);
},



  Destroying(event){
    let forma = document.getElementById("Radionica");
    forma.removeChild(event.target.parentNode);
    if(forma.lastElementChild.previousSibling.tagName == 'H2')this.NoviDiv();
  },

  submitaj(event){
    document.getElementById("Radionica").submit();
  }
 }
}
</script>

<style scoped>
.hero {
  //display: flex;
  //justify-content: flex-start;
  //flex-direction: column;
  //align-items: center;
  height: 100vh;
  //width: 100%;
  background-color: white;
  text-align: center;
  //padding: 20px;
  //box-sizing: border-box;
}

.closer{
  width:1vw;
}

button{
  height: 3.6vh;
  padding: 5px 10px;
  margin: 20px auto 20px 50px;
  border: none;
  border-bottom: 1px solid grey;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
}

option {
  background: #014479;
}

.VrstePitanja{
  height: 3.6vh;
  padding: 5px 10px;
  margin: 20px auto 20px 50px;
  border: none;
  border-bottom: 1px solid grey;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
}

.dugiteksti{
  width: 36vw;
}

.testni{
  //background-color: green;
}

#Radionica{
  background-color: #014479;
  width: 60vw;
  position: relative;
  left: 20vw;
  text-align: left;
  padding: 20px;
  line-height: 4vh;
  font-size: 2vh;
}

input{
  height: 2vh;
  padding: 5px 10px;
  margin: 20px auto 20px 50px;
  border: none;
  border-bottom: 1px solid grey;
  font-size: 20px;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
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