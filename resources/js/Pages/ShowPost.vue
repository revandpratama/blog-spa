<template>
    <div>
        

        <div class="mb-10">
            <h1 class="text-2xl font-medium">{{ props.post.title }}</h1>
            <h5>Author : <Link :href="/authors/+props.post.user.username">{{ props.post.user.name }}</Link></h5>
            <h5>in <Link :href="/categories/+props.post.category.slug">{{ props.post.category.name }}</Link></h5>
            <div class="w-1/3 my-5">
                <img src="https://source.unsplash.com/1200x720" alt="">
            </div>
            <p class="my-5">{{ props.post.body }}</p>

            
        </div>
        <Link href="/" class="underline text-blue-500 italic">Go Back</Link>
    </div>
</template>


<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite';


onMounted(() => {
    initFlowbite()
})

const props = defineProps(['post'])


</script>

<script>
import MainLayout from '../Layouts/MainLayout.vue'

export default {
    layout: MainLayout,
}

</script>