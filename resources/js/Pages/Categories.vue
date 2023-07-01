<template>
    <div class="grid mx-auto grid-cols-3">
        <div class="flex justify-center" v-for="category in props.categories">
            <Link :href="/categories/+category.slug" class="bg-sky-500 rounded-xl w-1/3 h-32 text-center flex items-center justify-center">
                <h1>{{ category.name }}</h1>
            </Link>
        </div>
    </div>
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
}

</script>