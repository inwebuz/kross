<template>
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-3xl font-bold mb-4">{{ page.name }}</h1>
        <p>{{ page.description }}</p>
    </div>

</template>

<script>
export default {
    props: {
        page: Array
    }
}
</script>
