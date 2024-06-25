<template>
  <section class="hero">
    <div class="button-container">
      <button class="hero-button" @click="showInfo(1)">Otvorene prijave</button>
      <button class="hero-button" @click="showInfo(2)">Zatvorene prijave</button>
      <button class="hero-button" @click="showInfo(3)">Moje prijave</button>
      <button class="hero-button" @click="showInfo(4)">Aktivno</button>
    </div>
    <div class="hero-content">
      <div v-if="selectedButton === 1">
        <h2>Otvorene prijave</h2>
        <p></p>
      </div>
      <div v-else-if="selectedButton === 2">
        <h2>Zatvorene prijave</h2>
        <p>Description 2</p>
      </div>
      <div v-else-if="selectedButton === 3">
        <h2>Moje prijave</h2>
        <p>Description 3</p>
      </div>
      <div v-else-if="selectedButton === 4">
        <h2>Aktivno</h2>
        <p>Description 4</p>
      </div>
      <swiper
        :slidesPerView="slidesPerView"
        :spaceBetween="30"
        :pagination="{ clickable: true }"
        :modules="modules"
        :navigation="true"
        class="mySwiper"
      >
        <SwiperSlide v-for="photo in photos" :key="photo">
          <img :src="`/_nuxt/public/${photo}`" alt="" />
        </SwiperSlide>
      </swiper>
    </div>
  </section>
</template>


<script>
import { Swiper, SwiperSlide } from 'swiper/vue'; // Importing Swiper for Vue
import 'swiper/swiper-bundle.css'; // Import Swiper styles
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import { Pagination, Navigation } from 'swiper/modules';
import { ref, onMounted } from 'vue';

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const slidesPerView = ref(3);
    const navigationOptions = ref(true);

    const updateResponsiveSettings = () => {
      if (window.innerWidth < 768) {
        slidesPerView.value = 1;
        navigationOptions.value = false;
      } else {
        slidesPerView.value = 3;
        navigationOptions.value = {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        };
      }
    };

    onMounted(() => {
      updateResponsiveSettings();
      window.addEventListener('resize', updateResponsiveSettings);
    });

    return {
      slidesPerView,
      navigationOptions,
      modules: [Pagination, Navigation],
    };
  },
  data() {
    return {
      selectedButton: 1,
      courses: [],
      photos: [
        'photo1.jpg',
        'photo2.jpg',
        'photo3.jpg',
        'photo4.jpg',
        'photo5.jpg',
      ],
    };
  },
  methods: {
    showInfo(buttonNumber) {
      this.selectedButton = buttonNumber;
    },
  },
};
</script>

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
  max-width: 75%;
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

  .swiper-button-next,
  .swiper-button-prev {
    display: none;
  }
}
</style>
