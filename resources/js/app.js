require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
import VueI18n from 'vue-i18n'
import router from './router'
import i18n from './i18n'
import LineLoader from './components/LineLoaderComponent.vue';

Vue.use(VueRouter)
Vue.use(VueI18n)

Vue.component('line-loader',LineLoader)


const app = new Vue({
    i18n,
    router: router,
    data: {
        loading:false,
    },
}).$mount('#app');

router.beforeEach((to, from, next) => {
    app.loading = true
    next()
})

router.afterEach(() => {
    setTimeout(() =>
        app.loading = false
    , 600)
})
