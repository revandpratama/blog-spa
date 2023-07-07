<template>
    <div class="flex">
        
    </div>
</template>


<script setup>
import { onMounted } from 'vue';
import { initFlowbite } from 'flowbite';
import DashboardLayout from '../../Layouts/DashboardLayout.vue';



onMounted(() => {
    initFlowbite();
})






</script>

<script>

export default {
    layout: DashboardLayout
}
</script>

