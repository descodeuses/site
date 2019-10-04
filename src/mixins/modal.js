export default {
	data() {
		return {
			modal: null
		}
	},
	mounted() {
		// eslint-disable-next-line no-undef
		this.modal = M.Modal.init(this.$refs.modal, {})
	},
	methods: {
		open() {
			this.modal.open()
		},
		close() {
			this.modal.close()
		}
	}
}
