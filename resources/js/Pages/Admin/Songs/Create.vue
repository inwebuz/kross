<template>
    <Head title="Create Song" />
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-3xl font-bold mb-4">Create Song</h1>

        <div class="my-4">
            <form action="" method="post">
                <div class="mb-6">
                    <label class="block mb-2 font-bold">Name</label>
                    <input type="text" class="border border-gray-400 p-2 w-full">
                </div>
            </form>
        </div>

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    songs: Object,
})

</script>
