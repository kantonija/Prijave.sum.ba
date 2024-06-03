// https://nuxt.com/docs/api/configuration/nuxt-config
import viteSvgLoader from 'vite-svg-loader'

export default {
  devtools: { enabled: true },
  css: [
    './assets/style.css'
  ],
  buildModules: [
    '@nuxt/postcss8'
  ],
  vite: {
    plugins: [
      viteSvgLoader()
    ]
  }
}
