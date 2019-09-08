import Vue from 'vue'
import Router from 'vue-router'
import index from './pages/index.vue'
import inscription from './pages/inscription.vue'


Vue.use(Router)

export default new Router({
        mode: 'history',
        routes: [
            {
                path: '',
                name: 'index',
                component: index
            },
            {
                path: '/inscription',
                name: 'inscription',
                component: inscription
            }
        ]
    })
    
