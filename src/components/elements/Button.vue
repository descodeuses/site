<script>
    export default {
        components: {
        },

        props: {
            icon: { type: String },
            func: {
                type: Function,
                default: () => {}
            },
            disabled: {
                type: Boolean,
                default: false,
            },
            type: {
                type: String,
                default: 'button'
            }
        }
    }

</script>

<template>
    <button :type="type"
        @click="func()"
        class=""
        :class="{ 'disabled': disabled }">
        <div class="s-button-label valign-wrapper">
            <slot></slot> <i class="material-icons prefix">{{ icon }}</i>
        </div>
    </button>
</template>

<style scoped>
button {
    font-size: 1em;
    display: inline-flex;
    transition: ease .2s;
    align-items: center;
    justify-content: center;
    border-radius: 2px;
    border: 1px solid #E2E2E2;
    background: #035DA8;
    position: relative;
    cursor: pointer;
    color: #FFF;
    width: 300px;
    border-radius: 4px;
    text-transform: uppercase;
    padding: 10px
}
i {
    margin-left: 10px
}
button:hover {

}
button:focus{
    outline: 0;
}
button:active{
    box-shadow: 0 1px 3px -2px rgba(0,0,0,0);
} 
button:focus:active{
    box-shadow: 0 2px 5px -3px rgba(0,0,0,0.3);
    border: 2px solid #035DA8;
    color: #035DA8;
    background: transparent
}  

</style>

