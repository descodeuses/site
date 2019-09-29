const state = {
	form: {}
}

const getters = {}

const actions = {
	updateMotivation(context, attributes){
		context.commit('SET_MOTIVATION', attributes)
	},

	updateExperieces(context, attributes){
		context.commit('SET_EXPERIENCES', attributes)
	},

	updateInfo(context, attributes){
		context.commit('SET_INFO', attributes)
	}

}
const mutations = {
	SET_MOTIVATION(state, data) {
		state.form.motivation = data
	},

	SET_EXPERIENCES(state, data) {
		state.form.experiences = data
	},

	SET_INFO(state, data) {
		state.form.info = data
	}
}

export default {
	namespaced: true,
	state,
	getters,
	actions,
	mutations
}
