<template>
  <section class="forma">
    <div class="hero-content">
      <form id="Radionica">
        <div class="dio">
         <p id="NazivRadionice"><h1 id="Naziv"></h1> </p>
         <p id="OpisRadionice"><h3 id="Opis"></h3> </p>
  
         </div>
        
         
        <hr size="10" width="100%" color="white" />
        
          <div class="dio" id="listaPitanja">
            <!--<h2 id="tekst"> Tekst pitanja <br/></h2>
            <textarea id="odgovor"
              :class=" { 'textarea-custom-width': true, 'h-auto': true }"
              @input="adjustHeight"
              class="resize-none overflow-hidden p-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
          </div>

          <div class="dio" id="listaPitanja2">
            <h2>Tekst pitanja</h2>
            <input type="radio" id="option1" value="Option 1">
            <label for="option1">Opcija 1</label><br/>
            <input type="radio" id="option2" value="Option 2">
            <label for="option2">Opcija 2</label><br/>
            <input type="radio" id="option3" value="Option 3">
            <label for="option3">Opcija 3</label><br/>
          </div>
          
          <div class="dio" id="listaPitanja3">
            <h2>Tekst pitanja</h2>
            <input type="checkbox" id="checkbox" value="Opcija">
            <label for="checkbox">Neki tekst</label><br/>
            <input type="checkbox" id="checkbox" value="Opcija">
            <label for="checkbox">Neki tekst</label><br/>
            <input type="checkbox" id="checbox" value="Opcija">
            <label for="checkbox">Neki tekst</label><br/>-->
         </div>
      </form>
    </div>
  </section>
</template>

<script>
import axios from 'axios';

export default {
  mounted(){
    this.getRadionica();
  },

  methods: {
    async getRadionica(){
      try {
          await axios.get("http://localhost:8000/Radionica/" + this.$route.query.id).then(res =>{
            document.getElementById("Naziv").innerHTML = res.data.NazivRadionice;
            document.getElementById("Opis").innerHTML = res.data.OpisRadionice;
          })
        } catch (error) {
          this.error = error.response ? error.response.data : error.message
        }
        try{
          await axios.get("http://localhost:8000/SvaPitanja/" + this.$route.query.id).then(res =>{
            console.log(res.data);
            res.data.forEach(pitanje=>{
              this.ispisiPitanje(pitanje);
            })
          })
        }catch(error){
          this.error = error.response ? error.response.data : error.message
        }
    },
    ispisiPitanje(pitanje){
      console.log(pitanje);
      console.log(document.getElementById("Naziv"));
      if(pitanje.VrstaPodatka == "KratkiOdgovor"){
        document.getElementById("listaPitanja").appendChild(document.createElement("div"));
        document.getElementById("listaPitanja").lastChild.innerHTML="<h2 id='tekst'> " + pitanje.NazivPitanja + " <br/></h2><textarea id='odgovor':class='{'textarea-custom-width':true,'h-auto':true}'@input='adjustHeight'class='resize-none overflow-hidden p-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50'></textarea>";
        
      }
    }
  }
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