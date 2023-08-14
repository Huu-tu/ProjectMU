import Vue from 'vue';
// import VueRouter from 'vue-router';
import * as VueRouter from 'vue-router';
import Home from './components/Home.vue';
import ListCloud from './components/ListCloud.vue';
import AddCloud from './components/AddCloud.vue';
import SingleDrive from './components/SingleDrive.vue';
import DetailDrive from './components/DetailDrive.vue';

// Vue.use(VueRouter);

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes: [
        {
            path: '/',
            component: Home,
            name: 'home',
        },
        {
            path: '/addCloud',
            component: AddCloud,
            name: 'addCloud',
        },
        {
            path: '/listCloud',
            component: ListCloud,
            name: 'listCloud',
        },
        {
            path: '/singleDrive/:cloud/:id',
            component: SingleDrive,
            name: 'singleDrive',
            props: true
        },
        {
            path: '/detailDrive/:id',
            component: DetailDrive,
            name: 'detailDrive',
        },
    ]
});

export default router;