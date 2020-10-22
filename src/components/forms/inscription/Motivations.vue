<script>
import BaseButton from '@/components/elements/Button.vue'
let reader = new FileReader()

export default {
	components: {
		BaseButton
	},
	data() {
		return {
			motivation: {},
			loading: false
		}
	},
	created() {
		let form = this.$store.getters['register/form']
		if (form.motivations) this.motivation = form.motivations
		reader.onload = (e) => {
			this.motivation.resume = e.target.result
		}
	},
	methods: {
		goBack() {
			this.$store.dispatch('register/updateMotivation', this.motivation)
			this.$emit('prevStep')
		},
		saveFile() {
			let file = this.$refs.file.files[0]
			if (file) {
				reader.readAsDataURL(file)
			}
		},
		validate() {
			this.$validator.validateAll().then(result => {
				if (!result) return
				this.$store.dispatch('register/updateMotivation', this.motivation)
				this.$emit('nextStep')
			})
		}
	}
}
</script>

<template>
	<div class="col s8 offset-s2">
		<h1 class="title is-uppercase">Motivations</h1>
		<span class="help-text">* les champs sont obligatoires</span>
		<div class="row left-align">
			<Loader v-if="loading" />
			<h2>Pré-requis obligatoires :</h2>
			<p>Pour évaluer votre motivation, nous devons vérifier le nombre de points que vous avez obtenus sur la plateforme (40 points minimum sont requis)<strong>freeCodeCamp</strong>.</p>
			<ol>
				<li>
					Rendez-vous sur
					<a href="https://www.freecodecamp.org/" target="_blank">freeCodeCamp</a>
				</li>
				<li>
					Inscrivez-vous, créez un profil et réglez-le en mode public.
				</li>
			</ol>
		</div>
		<div class="row">
			<form v-on:submit.prevent v-on:submit="validate()">
					<div class="row">
						<div class="input-field col s12 left-align">
							<h2>Indiquez le lien de votre profil freeCodeCamp :</h2>
							<input
								type="text"
								v-model="motivation.github"
								name="github"
								placeholder="ex. https://www.freecodecamp.org/bob"
								id="freeCodeCamp"
							/>
						</div>
				</div>
				<div class="row left-align">
					<h2>Racontez-nous une situation personnelle ou professionnelle durant laquelle vous avez surmonté un obstacle et de quelle manière ?</h2>
					<textarea
						v-model="motivation.obstacle"
						name="obstacle"
						cols="30"
						rows="10"
						class="materialize-textarea"
						v-validate="'required'"
						:class="{invalid: errors.has('obstacle')}"
					></textarea>
					<span class="helper-text" data-error="Ce champs obligatoire"></span>
				</div>
				<div class="row left-align">
					<h2 for>Pourquoi voulez-vous intégrer la formation DESCODEUSES ? *</h2>
					<p
						class="help-text"
					>Détaillez votre motivation avec vos mots à vous. Vous pouvez également faire une vidéo (3min max), un site simple ou tout autre chose qui montre votre envie, votre motivation et vos compétences !</p>
					<textarea
						v-model="motivation.whydescodeuses"
						name="whydescodeuses"
						cols="30"
						rows="10"
						class="materialize-textarea"
						v-validate="'required'"
						:class="{invalid: errors.has('whydescodeuses')}"
					></textarea>
					<span class="helper-text" data-error="Ce champs obligatoire"></span>
				</div>
				<div class="row left-align">
					<h2 for>Quel parcours professionnel envisagez-vous après la formation ?</h2>
					<textarea
						v-model="motivation.afterformation"
						name="afterformation"
						cols="30"
						rows="10"
						class="materialize-textarea"
						v-validate="'required'"
						:class="{invalid: errors.has('afterformation')}"
					></textarea>
					<span class="helper-text" data-error="Ce champs obligatoire"></span>
				</div>
				<div class="row left-align">
					<h2 for>Décrivez le métier de codeuse - developpeuse ?</h2>
					<textarea
						v-model="motivation.developerdescription"
						name="developerdescription"
						cols="30"
						rows="10"
						class="materialize-textarea"
						v-validate="'required'"
						:class="{invalid: errors.has('developerdescription')}"
					></textarea>
					<span class="helper-text" data-error="Ce champs obligatoire"></span>
				</div>
				<div class="row left-align">
					<div class="col m4 s6">
						<h2>Avez-vous un ordinateur ? *</h2>
						<div class="control">
							<label>
								<input
									v-model="motivation.havecomputer"
									name="havecomputer"
									:value="true"
									type="radio"
									v-validate="'required'"
									:class="{invalid: errors.has('havecomputer')}"
								/>
								<span>Oui</span>
							</label>
						</div>
						<div class="control">
							<label>
								<input v-model="motivation.havecomputer" name="havecomputer" :value="false" type="radio" />
								<span>Non</span>
							</label>
						</div>
						<span class="helper-text" data-error="Ce champs obligatoire"></span>
					</div>
					<div class="col m4 s6 left-align">
						<h2>Avez-vous participé à un atelier d’initiation à la programmation ?</h2>
						<div class="control">
							<label>
								<input
									v-model="motivation.workshop"
									name="workshop"
									:value="true"
									v-validate="'required'"
									type="radio"
									:class="{invalid: errors.has('workshop')}"
								/>
								<span>Oui</span>
							</label>
						</div>
						<div class="control">
							<label>
								<input v-model="motivation.workshop" name="workshop" :value="false" type="radio" />
								<span>Non</span>
							</label>
						</div>
						<span class="helper-text" data-error="Ce champs obligatoire"></span>
					</div>
					<div class="col m4 s6 left-align">
						<h2>Votre CV <br><span class="help">(uniquement en pdf)</span></h2>

						<div class="file">
							<label class="file-label">
								<input
									@change="saveFile"
									class="file-input"
									type="file"
									name="resume"
									accept="application/pdf"
									ref="file"
								/>
							</label>
						</div>
						<!--<p class="help-text error">Il est obligatoire avoir un CV</p>-->
					</div>
				</div>
			</form>
			<div class="center">
				<BaseButton :func="goBack">Précédent</BaseButton>
				<BaseButton :func="validate">Suivant</BaseButton>
			</div>
		</div>
	</div>
</template>
<style scoped>
h1 {
	font-size: 25px;
	font-weight: bold;
	text-transform: uppercase;
}
h2 {
	font-size: 16px;
	font-weight: bold;
	text-transform: uppercase;
}
.error {
	color: red;
}
.help {
	font-size: 12px;
}
</style>
