<template>
    <section class="hero">
      <h1>Napravite novu radionicu</h1>
      <div class="hero-content">
        <form id="Radionica" @submit.prevent="submitForm">
          <h2>Osnovne informacije o prijavi:</h2>
          <label for="naziv">Naziv vaše prijave:</label>
          <input id="naziv" type="text" placeholder="Unesite naziv..." />
          
          <label for="opis">Dodatne informacije o prijavi:</label>
          <input id="opis" type="text" placeholder="Unesite opis..." />
          
          <label for="voditelj">Ime i prezime voditelja:</label>
          <input id="voditelj" type="text" placeholder="Unesite voditelja..." />
          
          <label for="pocetak">Datum početka:</label>
          <input id="pocetak" type="date" />
          
          <label for="kraj">Datum završetka:</label>
          <input id="kraj" type="date" />
          
          <label for="rok">Rok za prijave:</label>
          <input id="rok" type="datetime-local" />
          
          <h2>Lista pitanja za prijavu:</h2>
          <div class="pitanje">
            <input type='text' class='dugiteksti' placeholder='Unesite naziv pitanja...' />
            <select class='VrstePitanja' @change='promjenaVrste'>
              <option value='KratkiOdgovor'>Kratki Odgovor</option>
              <option value='ViseTocnih'>Vise Tocnih</option>
              <option value='JedanOd'>Jedan Od</option>
            </select>
            <button class="Closer" @click="Destroying">X</button>
          </div>
          <button type="button" @click="NoviDiv">Dodaj još jedno pitanje</button>
          <button type="submit">Napravi prijavu</button>
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
        pom2.innerHTML = "<input type='text' class='dugiteksti' placeholder='Unesite naziv pitanja...'/><select class='VrstePitanja'><option value='KratkiOdgovor'>Kratki Odgovor</option><option value='ViseTocnih'>Vise Tocnih</option><option value='JedanOd'>Jedan Od</option></select><button class='Closer' @click='Destroying'>X</button>";
        forma.insertBefore(pom2, forma.lastElementChild.previousSibling);
        
        let selectElement = pom2.querySelector(".VrstePitanja");
        selectElement.addEventListener("change", this.promjenaVrste);
        let pomocni = pom2.querySelector(".Closer");
        pomocni.addEventListener("click", this.Destroying);
      },
      Destroying(event) {
        let forma = document.getElementById("Radionica");
        forma.removeChild(event.target.parentNode);
        if (forma.lastElementChild.previousSibling.previousSibling.tagName == 'H2') this.NoviDiv();
      },
      submitForm() {
        alert('Form submitted!');
      }
    }
  }
  </script>
  
  <style scoped>
/* Osiguravanje da svi elementi koriste border-box model */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* Globalni reset za margine i paddinge */
body,
html {
    margin: 0;
    padding: 0;
    overflow-x: hidden; /* Sprječava horizontalno pomicanje */
}

/* Glavni stilovi za hero sekciju */
.hero {
    height: 100vh;
    background-color: white;
    text-align: center;
    padding: 20px;
}

button {
    height: 3.6vh;
    padding: 10px 20px;
    margin: 20px auto;
    border: none;
    border-bottom: 1px solid grey;
    background-color: #014479;
    color: white;
    transition: all 0.3s ease;
    cursor: pointer;
}

button:hover {
    background-color: #012f5c;
}

option {
    background: #014479;
}

.VrstePitanja {
    height: 3.6vh;
    padding: 5px 10px;
    margin: 20px auto;
    border: none;
    border-bottom: 1px solid grey;
    background-color: transparent;
    transition: all 0.3s ease;
    color: white;
    max-width: 100%;
}

.dogiteksti {
    width: 100%;
    padding: 5px 10px;
    margin: 20px auto;
    border: none;
    border-bottom: 1px solid grey;
    background-color: transparent;
    transition: all 0.3s ease;
    color: white;
}

#Radionica {
    background-color: #014479;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
    padding: 20px;
    line-height: 1.5;
    font-size: 1rem;
}

input {
    height: 2vh;
    padding: 5px 10px;
    margin: 20px auto;
    border: none;
    border-bottom: 1px solid grey;
    font-size: 1rem;
    background-color: transparent;
    transition: all 0.3s ease;
    color: white;
    max-width: 100%;
}

label {
    display: block;
    margin: 10px auto 5px;
    color: white;
}

.pitanje {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin: 10px 0;
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 1.5rem;
    }

    .hero-content {
        padding: 10px;
    }

    button {
        margin: 10px 5px;
    }

    .VrstePitanja, .dogiteksti {
        width: 100%;
        margin: 10px 0;
    }

    #Radionica {
        padding: 10px;
    }

    input {
        width: 100%;
    }

    label {
        margin: 10px 0;
    }
}

  </style>
  