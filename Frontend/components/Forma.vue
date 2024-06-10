<template>
    <section class="forma">
      <div class="hero-content">
        <form id="Radionica">
          <div class="dio">
           <h1>Naziv radionice: <br/></h1>
           <h3>Opis radionice: <br/><br/></h3>
           </div>
           
          <hr size="10" width="100%" color="white" />
          
            <div class="dio">
              <h2> Tekst pitanja <br/></h2>
              <textarea v-model="text"
                :class=" { 'textarea-custom-width': true, 'h-auto': true }"
                @input="adjustHeight"
                class="resize-none overflow-hidden p-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
            </div>

            <div class="dio">
              <h2>Tekst pitanja</h2>
              <input type="radio" id="option1"  value="Option 1" v-model="selectedOption">
              <label for="option1">Opcija 1</label><br/>
              <input type="radio" id="option2" value="Option 2" v-model="selectedOption">
              <label for="option2">Opcija 2</label><br/>
              <input type="radio" id="option3" value="Option 3" v-model="selectedOption">
              <label for="option3">Opcija 3</label><br/>
            </div>
            
            <div class="dio">
              <h2>Tekst pitanja</h2>
              <input type="checkbox" id="checkbox" value="Opcija" v-model="opcija">
              <label for="checkbox">Neki tekst</label><br/>
              <input type="checkbox" id="checkbox" value="Opcija" v-model="opcija">
              <label for="checkbox">Neki tekst</label><br/>
              <input type="checkbox" id="checbox" value="Opcija" v-model="opcija">
              <label for="checkbox">Neki tekst</label><br/>
           </div>
        </form>
      </div>
    </section>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const selectedOption = ref('');
  const agreed = ref(false);

  function adjustHeight() {
    const element = document.querySelector('textarea');
    element.style.height = 'auto';
    element.style.height = `${element.scrollHeight}px`;
  }
  
  </script>
  
  <style scoped>
  
    .forma {
      height: 100vh;
      background-color: white;
      text-align: center;
    }
  
    .hero-content {
      max-width: 800px;
    }
  
    #Radionica {
      background-color: #014479;
      width: 60vw;
      position: relative;
      left: 20vw;
      top: 5vw;  
      text-align: left;
      line-height: 4vh;
      font-size: 2vh;
    }

    .dugiodgovor {
      width: auto;
      height: auto;
    }

    .dio {
      padding: 20px 10px 5px 20px;
      border-radius: 8px;
    }

    .textarea-custom-width {
      width: 50%;
    }  
  </style>
  