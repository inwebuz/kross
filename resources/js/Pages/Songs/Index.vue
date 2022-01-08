<template>
    <!-- <Head title="Test songs" /> -->
    <Head>
        <title>{{ page_seo_title }}</title>
        <meta head-key="description" name="description" :content="page.meta_description" />
        <meta head-key="keywords" name="keywords" :content="page.meta_keywords" />
    </Head>
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-3xl font-bold mb-4">{{ page.name }}</h1>
        <div class="my-4">
            <Player :songs="songs" />
        </div>
        <div class="text-block" v-html="page.description"></div>
    </div>
</template>

<script setup>
import Player from '../../Shared/Player.vue'
import {computed} from 'vue';
let props = defineProps({
    page: Object,
    songs: Object,
})
let page_seo_title = computed(() => props.page.seo_title || props.page.name)

</script>
