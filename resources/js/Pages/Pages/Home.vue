<template>
    <Head :title="page.name" />
    <div class="container mx-auto px-6 flex flex-col sm:flex-row relative py-16">
        <div class="sm:w-2/3 lg:w-3/5 flex flex-col justify-center relative z-20 text-center sm:text-left">
            <span class="w-20 h-2 mb-12 hidden sm:inline-block bg-white">
            </span>
            <h1 class="font-bebas-neue uppercase text-5xl sm:text-7xl font-black flex flex-col leading-none mb-4">
                KROSS
            </h1>
            <div class="text-block" v-html="page.description"></div>
            <div class="mt-8">
                <Link href="/songs" class="uppercase py-2 px-4 rounded-lg bg-red-600 border-2 border-transparent text-white text-md mr-4 hover:bg-red-500">
                    Songs
                </Link>
                <Link href="/services" class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-red-600 text-red-500 dark:text-white hover:bg-red-600 hover:border-red-600 hover:text-white text-md">
                    Services
                </Link>
            </div>
        </div>
        <div class="sm:w-1/3 lg:w-3/5 flex items-center mt-10 sm:mt-0">
            <!-- <img src="/images/music.png" class="max-w-xs md:max-w-sm m-auto"/> -->
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    page: Object,
})
</script>
