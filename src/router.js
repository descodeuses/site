import Vue from 'vue'
import Router from 'vue-router'
import association from './pages/association.vue'


Vue.use(Router)

export default new Router({
        mode: 'history',
        routes: [
            {
                path: '',
                name: 'association',
                component: association
            }
        ]
    })
    
