import Vue from 'vue'
import Vuex from 'vuex'
import register from './modules/register'

Vue.use(Vuex)

let store = new Vuex.Store({
	modules: {
		register
	}
})

export default store
