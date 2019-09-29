/* eslint-disable no-undef */
export function initM() {
	this.$nextTick(function() {
		let selects = this.$el.querySelectorAll('select')
		if (selects) M.FormSelect.init(selects, {})
	})
}

export function destroyM() {
	this.$el.querySelectorAll('select').forEach(elem => {
		let instance = M.FormSelect.getInstance(elem)
		if (instance && instance != undefined) instance.destroy()
	})
}

export function updateM() {
	destroyM.call(this)
	initM.call(this)
}
