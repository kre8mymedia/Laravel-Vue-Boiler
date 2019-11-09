require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router').default;

Vue.config.productionTip = false

Vue.use(VueRouter);

// App Components
ExampleComponent = Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Dashboard = Vue.component('dashboard', require('./components/Dashboard.vue').default);
App = Vue.component('App', require('./App.vue').default);

const routes = [
    { 
        path: '/dashboard',
        component: Dashboard,
        meta: { middlewareAuth: true }
    },
    {   path: '/example', 
        component: ExampleComponent,
        meta: { middlewareAuth: true }
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

new Vue({
    router,
    render: h => h(
        App,
    )
}).$mount('#app')