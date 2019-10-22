<script>
import PersonnalInfos from '@/components/forms/inscription/PersonnalInfos.vue'
import Experiences from '@/components/forms/inscription/Experiences.vue'
import Motivations from '@/components/forms/inscription/Motivations.vue'
import { updateM } from '@/utils/materialize'
import BaseButton from '@/components/elements/Button.vue'
import Modal from '@/components/elements/Modal.vue'
import Loader from '@/components/elements/Loader.vue'

export default {
	data() {
		return {
			step: 0
		}
	},
	components: {
		Loader,
		Modal,
		PersonnalInfos,
		Motivations,
		Experiences,
		BaseButton
	},
	methods: {
		prevStep() {
			this.step--
			updateM.call(this)
		},
		nextStep() {
			if (this.step == 3) return this.submit()
			this.step++
			updateM.call(this)
		},
		redirect() {
			this.$router.push('/')
		},
		submit() {
			this.$axios
				.post('/register', this.$store.getters['register/form'])
				.then(res => {
					this.$refs.modal.open()
				})
				.catch(err => {
					this.$refs.errorModal.open()
				})
		}
	}
}
</script>

<template>
	<div class="container">
		<Modal
			:header="'Inscription pris en compte'"
			:subheader="'Nous allons étudier votre candidature !'"
			:validate="redirect"
			ref="modal"
		/>
		<Modal
			:header="'Une erreur est survenue'"
			:subheader="'Veuillez réessayer plus tard.'"
			ref="errorModal"
		/>
		<div class="col s8 offset-s2" v-if="step === 0">
			<h1 class="title">candidatures</h1>
			<p
				class="left-align"
			>Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par descodeuses.org pour le suivi des candidatures à nos formations, ainsi qu'au suivi administratif et pédagogique si vous êtes retenu.e.s pour suivre nos formations. Elles sont conservées pendant 3 ans et sont destinées à la Direction de la Formation, de l'ingénierie et des Partenariats, ainsi qu'aux directions territoriales.</p>
			<br />
			<p
				class="left-align"
			>Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant et les faire rectifier en contactant :</p>
			<address class="center-align">
				A l'attention du délégué à la protection des données DesCodeuses MVAC 20e
				<br />18 rue Ramus
				<br />75020 Paris
				<br />
			</address>
			<br />
			<p class="center-align">ou par e-mail: rgpd@descodeuses.org.</p>
			<br />
			<br />
			<br />
			<div class="center-align">
				<BaseButton :func="nextStep">J'accepte</BaseButton>
			</div>
			<br />
			<br />
		</div>
		<div class="container center">
			<PersonnalInfos v-if="step == 1" @prevStep="prevStep()" @nextStep="nextStep()" />
			<Experiences v-if="step == 2" @prevStep="prevStep()" @nextStep="nextStep()" />
			<Motivations v-if="step == 3" @prevStep="prevStep()" @nextStep="nextStep()" />
		</div>
	</div>
</template>
<style scoped>
</style>