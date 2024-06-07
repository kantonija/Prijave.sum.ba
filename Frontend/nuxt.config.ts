// https://nuxt.com/docs/api/configuration/nuxt-config
import viteSvgLoader from "vite-svg-loader";

export default {
  modules: ['vue3-carousel-nuxt'],
  devtools: { enabled: true },

  css: ["./assets/style.css"],

  buildModules: ["@nuxt/postcss8"],

  vite: {
    plugins: [viteSvgLoader()],
  },
  carousel: {
    prefix: 'MyPrefix' // Replace 'MyPrefix' with your desired prefix
  }
};