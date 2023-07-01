<template>

</template>



<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite';


onMounted(() => {
    initFlowbite()
})

const props = defineProps(['categories'])



</script>

<script>
import MainLayout from '../Layouts/MainLayout.vue'

export default {
    layout: MainLayout,
    props: ['posts']
}

</script>