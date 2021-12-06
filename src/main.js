import { createApp } from 'vue'
import App from './App.vue'
import { createStore } from 'Vuex';

const store = createStore({
  state: {
      heroes: "hola heroes",
  }
  // other stuff
})

createApp(App).mount('#app')
App.use(store);