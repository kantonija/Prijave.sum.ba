<template>
  <div class="carousel-container">
    <UCarousel v-slot="{ item, currentIndex, totalItems }" :items="items" :ui="{ item: 'basis-full md:basis-1/2 lg:basis-1/3' }" indicators class="rounded-lg overflow-hidden">
      <img :src="item" class="w-full" draggable="false">
    </UCarousel>
    <button @click="goToPrev" class="carousel-button-prev" :disabled="currentIndex === 0">Prev</button>
    <button @click="goToNext" class="carousel-button-next" :disabled="currentIndex === totalItems - 1">Next</button>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const items = [
  'https://picsum.photos/600/600?random=1',
  'https://picsum.photos/600/600?random=2',
  'https://picsum.photos/600/600?random=3',
  'https://picsum.photos/600/600?random=4',
  'https://picsum.photos/600/600?random=5',
  'https://picsum.photos/600/600?random=6'
];

const currentIndex = ref(0);

const goToPrev = () => {
  if (currentIndex.value > 0) {
    currentIndex.value--;
  }
};

const goToNext = () => {
  if (currentIndex.value < items.length - 1) {
    currentIndex.value++;
  }
};
</script>
