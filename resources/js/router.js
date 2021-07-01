import Home from './components/ExampleComponent.vue';
import Second from './components/SecondComponent.vue';
import VueRouter from 'vue-router'


const routes = [
    {
        path:'/',
        component: Home,
    },
    {
        path:'/second',
        component: Second,
    }
]

export default new VueRouter({
    routes
});
