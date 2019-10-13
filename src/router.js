import Vue from 'vue'
import Router from 'vue-router'
import index from './pages/index.vue'
import inscription from './pages/inscription.vue'
import association from './pages/association.vue'
import formations from './pages/formations.vue'
import contact from './pages/contact.vue'
import aide from './pages/aide.vue'
import accompagnement from './pages/accompagnement.vue'
import developpeuseFrontend from './pages/frontend.vue'


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
            },
            {
                path: '/association',
                name: 'association',
                component: association
            },
            {
                path: '/formations',
                name: 'formations',
                component: formations
            },
            {
                path: '/contact',
                name: 'contact',
                component: contact
            },
            {
                path: '/aide',
                name: 'aide',
                component: aide
            },
            {
                path: '/accompagnement',
                name: 'accompagnement',
                component: accompagnement
            },
            {
                path: '/frontend',
                name: 'frontend',
                component: developpeuseFrontend
            }
        ]
    })
    
