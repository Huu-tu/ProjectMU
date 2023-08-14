import { createStore } from 'vuex'

const store = createStore({
  state:{
    type:'pdf',
    cloud: '',
  },
  mutations:{
    updateCloud(state, payload){
      state.cloud = payload
    },
  },
  actions:{
    addCloud(context, payload){
      // const cloud = context.state.cloud;
      // cloud = payload;
      context.commit('updateCloud', payload)
    }
  },
  getters:{
    getCloud(state){
      return ` ${state.cloud}`
    }
  }
})

export default store;