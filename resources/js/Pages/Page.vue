<template>
    <h1>{{ page.name }}</h1>
    <Nav></Nav>
</template>

<script>
import Nav from "../Shared/Nav";
export default {
    components: { Nav },
    props: {
        page: Array
    }
}
</script>
