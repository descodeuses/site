<script>
import Contact from '@/components/forms/Contact.vue'

export default {
    components: {
        Contact
    },
    methods: {
    }
}
</script>

<template>
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <h2>horaires de Permances</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Du lundi - vendredi</td>
                            <td>10h00 - 18h00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col 12 m6 card offset-m2">
                <Contact/>
            </div>
        </div>
    </div>
</template>
<style scoped>
h2, h3 {
    font-size: 1em;
    text-transform: uppercase;
}
.container {
    padding: 20px
}
.row div{
    padding: 30px;
}
</style>
