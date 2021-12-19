<template>
    <nav class="py-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center">
            <li v-for="(link, index) in links" :key="index" class="mr-1">
                <Link
                    v-if="link.url"
                    :href="link.url"
                    class="
                        text-red-700
                        hover:text-red-900
                        inline-flex
                        items-center
                    "
                >
                    {{ link.name }} -

                </Link>
                <div class="flex items-center" v-else>
                    <span class="text-gray-400 font-medium">
                        {{ link.name }}
                    </span>
                </div>
            </li>
        </ol>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: { Link },
    props: {
        links: Object,
    },
    mounted() {
        // console.log(this.links);
    }
};
</script>
