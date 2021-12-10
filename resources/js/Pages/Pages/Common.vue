<template>
    <div class="container mx-auto px-6 py-16">
        <div class="max-w-4xl">
            <h1 class="text-3xl font-bold mb-4">{{ page.name }}</h1>
            <div v-html="page.description"></div>
        </div>
    </div>

</template>

<script>
export default {
    props: {
        page: Object
    }
}
</script>
