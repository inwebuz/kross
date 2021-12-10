<template>
    <Head :title="page.name" />
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-3xl font-bold mb-4">{{ page.name }}</h1>

        <div class="my-4">
            <Player :songs="this.songs" />
        </div>

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script setup>
import Player from '../../Shared/Player.vue'
defineProps({
    page: Object,
    songs: Object,
})

</script>
