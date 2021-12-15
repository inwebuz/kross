<template>
    <div>
        <Component :is="link.url && !link.active ? 'Link' : 'span'" v-for="(link, index) in links" :key="index" :href="link.url" v-html="link.label" class="px-1" :class="{'text-gray-400': !link.url, 'text-red-600': link.active}" />
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: { Link },
    props: {
        links: Object,
    }
}
</script>
