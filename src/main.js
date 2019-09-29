import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store/index'
import axios from 'axios'
import VeeValidate from 'vee-validate'

Vue.config.productionTip = false
axios.defaults.baseURL = process.env.VUE_APP_API_URL


Vue.prototype.$store = store
Vue.prototype.$axios = axios.create()

Vue.use(VeeValidate)

new Vue({
	router,
	store,
    render: h => h(App),
}).$mount('#app')
