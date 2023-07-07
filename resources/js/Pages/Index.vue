<template>
    <div class="grid gap-5">

        <div v-for="post in props.posts" class="flex justify-center">
            <div class="w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-full" src='https://source.unsplash.com/1200x400?' alt="img" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ post.title }}</h5>
                        <h5>Author : {{ post.user.name }}</h5>
                        <h5>Category : {{ post.category.name }}</h5>
                    </a>
                    <p class="my-3 font-normal text-gray-700 dark:text-gray-400">{{ post.excerpt }}</p>
                    <Link :href="/post/ + post.slug" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </Link>
                </div>
            </div>
    
        </div>
    </div>


</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite';


onMounted(() => {
    initFlowbite()
})

const props = defineProps(['posts'])



</script>

<script>
import MainLayout from '../Layouts/MainLayout.vue'

export default {
    layout: MainLayout,
    props: ['posts']
}

</script>
