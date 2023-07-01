<template>
    <div>
        <h1>Hello World</h1>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite';


onMounted(() => {
    initFlowbite
})

</script>
