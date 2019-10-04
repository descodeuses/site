<script>
import Modal from '@/mixins/modal'

export default {
	mixins: [Modal],
    props: {
        cancel: {
            type: Function,
        },
        validate: {
            type: Function,
        },
        header: {
            type: String,
        },
        subheader: {
            type: String,
        }
    }
}
</script>
<template>
    <div id="modal1" class="modal" ref="modal">
        <div class="modal-content">
            <h2 class="heading">{{ header }}</h2>
            <p class="subheading">{{ subheader}}</p>
            <slot></slot>
        </div>
        <div class="modal-footer">
            <a @click="cancel" v-if="cancel" class="modal-close waves-effect waves-green btn-flat">Retour</a>
            <a @click="validate" v-if="validate" class="modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
    </div>
</template>