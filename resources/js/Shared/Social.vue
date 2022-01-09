<template>
    <nav class="items-center flex">
        <a v-for="social_setting in $page.props.social" :key="social_setting.id" :href="social_setting.value" class="mx-2 rounded-full bg-white" rel="nofollow" target="_blank" v-html="social_setting.svg"></a>
    </nav>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: { Link }
}
</script>
