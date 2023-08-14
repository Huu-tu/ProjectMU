import "../css/app.css";

import { createApp } from 'vue';
import App from './components/App.vue';
import Home from './components/Home.vue';
import router from './router';
import store from './store';
// import axios from 'axios'
// import VueAxios from 'vue-axios'

const app = createApp({})

app.use(router);
app.use(store);

app.component('home', Home)
app.component('app', App);
// app.use(VueAxios, axios)

app.mount('#app')