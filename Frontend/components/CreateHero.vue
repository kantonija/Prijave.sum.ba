<template>
  <section class="hero">
    <h1> Napravite novu radionicu </h1>
    <div class="hero-content">
      <form id="Radionica" @submit.prevent="submitForm">
        <h2> Osnovne informacije o prijavi: </h2>
        Naziv vaše prijave: <input type="text" placeholder="Unesite naziv..." /><br />
        Dodatne informacije o prijavi: <input type="text" placeholder="Unesite opis..." /><br />
        Ime i prezime voditelja: <input type="text" placeholder="Unesite voditelja..." /><br />
        Datum početka: <input type="date" /><br />
        Datum završetka: <input type="date" /><br />
        Rok za prijave: <input type="datetime-local" />
        <h2> Lista pitanja za prijavu: </h2>
        <div class="pitanje">
          <div class="flex-div">
            <input type='text' class='dugiteksti' placeholder='Unesite naziv pitanja...' />
            <select class='VrstePitanja' @change='promjenaVrste'>
              <option value='KratkiOdgovor'> Kratki Odgovor </option>
              <option value='ViseTocnih'> Vise Tocnih </option>
              <option value='JedanOd'> Jedan Od </option>
            </select>
            <button class="Closer" @click="Destroying">X</button>
          </div>
        </div>
        <div class="btn-div">
          <button class="Closer" @click="NoviDiv">Dodaj još jedno pitanje</button>
          <button class="Closer" @click='submitaj'>Napravi prijavu</button>
        </div>
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
      let dodajInput = document.createElement("input")
      dodajInput.style.backgroundColor = 'transparent'
      dodajInput.style.width = 'calc(40% - 20px)'
      dodajInput.style.padding = '10px'
      dodajInput.style.margin = '10px 0'
      dodajInput.style.border = 'none'
      dodajInput.style.borderBottom = '1px solid grey'
      dodajInput.style.transition = 'all 0.3s ease'
      dodajInput.style.color = 'white'
      pom.appendChild(dodajInput);
      let dodajButton2 = document.createElement('button')
      dodajButton2.style.backgroundColor = 'transparent'
      dodajButton2.style.borderRadius = '8px'
      dodajButton2.style.padding = '5px 10px'
      dodajButton2.style.margin = '10px 10px'
      dodajButton2.style.border = '1px solid white'
      dodajButton2.style.transition = 'all 0.3s ease'
      dodajButton2.style.color = 'white'
      dodajButton2.style.cursor = 'pointer'
      dodajButton2.style.textAlign = 'center'
      pom.appendChild(dodajButton2);
      pom.lastElementChild.innerHTML = "Dodaj još jednu opciju";
      pom.lastElementChild.onclick = (event) => {
        event.preventDefault();
        this.dodajOpciju(e);
      };
      let dodajButton = document.createElement("button")
      dodajButton.style.backgroundColor = 'transparent'
      dodajButton.style.borderRadius = '8px'
      dodajButton.style.padding = '5px 10px'
      dodajButton.style.margin = '10px 10px'
      dodajButton.style.border = '1px solid white'
      dodajButton.style.transition = 'all 0.3s ease'
      dodajButton.style.color = 'white'
      dodajButton.style.cursor = 'pointer'
      dodajButton.style.textAlign = 'center'
      pom.appendChild(dodajButton);
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
  forma.insertBefore(pom2, forma.lastElementChild);
  
  let selectElement = pom2.querySelector(".VrstePitanja");
  selectElement.addEventListener("change", this.promjenaVrste);
  let pomocni = pom2.querySelector(".Closer");
  pomocni.addEventListener("click", this.Destroying);
},



  Destroying(event){
    let forma = document.getElementById("Radionica");
    forma.removeChild(event.target.parentNode);
    if(forma.lastElementChild.previousSibling.previousSibling.tagName == 'H2')this.NoviDiv();
  },

  submitaj(event){
    document.getElementById("Radionica").submit();
  }
 }
}
</script>

<style scoped>
.hero {
  height: 100vh;
  background-color: white;
  text-align: center;
}

.Closer {
  background-color: #101D2F;
  border-radius: 8px;
  padding: 10px 20px;
  margin: 20px 20px;
  border: none;
  transition: all 0.3s ease;
  color: white;
  cursor: pointer;
  text-align: center;
}

.Closer:hover {
  background-color: #080f18;
}

.btn-div {
  display: flex;
  gap: 10px;
  justify-content: center;
  flex-wrap: wrap;
}

.btn-div button {
  text-align: center;
}

.VrstePitanja {
  border: 1px solid grey;
  border-radius: 8px;
  height: 3.6vh;
  padding: 5px 10px;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
}

option {
  background: #014479;
}

.dugiteksti {
  flex-grow: 1;
  min-width: 200px;
  padding: 5px 10px;
  border: none;
  border-bottom: 1px solid grey;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
}

#Radionica {
  background-color: #014479;
  width: 70%;
  max-width: 1000px;
  margin: 0 auto;
  text-align: left;
  padding: 20px;
  line-height: 4vh;
  font-size: 2vh;
}

input[type="text"],
input[type="date"],
input[type="datetime-local"] {
  width: calc(100% - 20px);
  padding: 10px;
  margin: 10px 0;
  border: none;
  border-bottom: 1px solid grey;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
}

.vise-tocnih {
  width: calc(100% - 20px);
  padding: 10px;
  margin: 10px 0;
  border: none;
  border-bottom: 1px solid grey;
  background-color: transparent;
  transition: all 0.3s ease;
  color: white;
}

.hero-content {
  max-width: 1500px;
  margin: 0 auto;
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
  width: 300px;
  margin-right: 20px;
}

.card img {
  width: 100%;
}

#Radionica input[type="date"]::-webkit-calendar-picker-indicator {
  filter: invert(1);
  opacity: 1;
  cursor: pointer;
}

#Radionica input[type="datetime-local"]::-webkit-calendar-picker-indicator {
  filter: invert(1);
  opacity: 1;
  cursor: pointer;
}
</style>