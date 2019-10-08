<script>
import Card from '@/components/cards/Card.vue'
export default {
    components: {
        Card
    },
    data() {
        return {
        }
    }
    
}
</script>
<template>
    <div>
       <Card
        :key="index"
        :heading="'test'"
        :text="',ljkbhjgfxcvbjnk,l;'"/>
    </div>
</template>
<style scoped>

</style>