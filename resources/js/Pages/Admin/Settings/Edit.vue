<template>
    <Head title="Edit Page" />
    <div class="container mx-auto px-6 py-16">
        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-4">Edit Setting - {{ setting.key }}</h1>

        <Form :setting="setting" />
    </div>
</template>

<script setup>
import Breadcrumbs from "../../../Shared/Breadcrumbs";
import Form from "../../../Shared/Settings/Form";
const props = defineProps({
    setting: Object
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
        name: "Settings",
        url: "/admin/settings",
    },
    {
        name: "Edit",
        url: "",
    },
];
</script>
