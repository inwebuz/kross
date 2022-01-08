<template>
    <Head title="Edit Page" />
    <div class="container mx-auto px-6 py-16">
        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-4">Edit Page - {{ page.name }}</h1>

        <Form :page="page" />
    </div>
</template>

<script setup>
import Breadcrumbs from "../../../Shared/Breadcrumbs";
import Form from "../../../Shared/Pages/Form";
const props = defineProps({
    page: Object
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
        name: "Pages",
        url: "/admin/pages",
    },
    {
        name: "Edit",
        url: "",
    },
];
</script>
