import { createStore } from 'vuex'

export default createStore({
  state: {
    heroes: [],
  },
  mutations: {
    setHeroe(state, heroe ) {
      state.heroes.push(heroe);
    },
    deleteHeroe(state, index) {

        // Existe heroe
        state.heroes.splice(index, 1);
    }
  },
  actions: {
  },
  modules: {
  }
})
