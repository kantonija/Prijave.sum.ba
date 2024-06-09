<template>
  <div>
    <vue-slider v-model="value" :min="0" :max="100" />
    <p>Selected value: {{ value }}</p>
  </div>
</template>

<script>
import VueSlider from 'vue-slider-component';

export default {
  components: {
    VueSlider
  },
  data() {
    return {
      value: 50
    };
  },
  // Isključivanje Server-Side Rendering (SSR) za ovu komponentu
  ssr: false
};
</script>
