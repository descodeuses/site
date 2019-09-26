<script>
import Contact from '@/components/forms/Contact.vue'
export default {
    components:{
        Contact
    }
    
}
</script>

<template>
    <div>
         <router-view/>
        <Contact/>
    </div>
</template>