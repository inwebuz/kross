<template>
    <Head title="Edit Song" />
    <div class="container mx-auto px-6 py-16">
        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-4">Edit Song - {{ song.name }}</h1>

        <Form :song="song" />

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script setup>
import Breadcrumbs from "../../../Shared/Breadcrumbs";
import Form from "../../../Shared/Songs/Form";
const props = defineProps({
    song: Object
})
let breadcrumbs = [
    {
        name: "Home",
        url: "/",
    },
    {
        name: "Admin",
        url: "/admin",
    },
    {
        name: "Songs",
        url: "/admin/songs",
    },
    {
        name: "Edit",
        url: "",
    },
];
</script>
