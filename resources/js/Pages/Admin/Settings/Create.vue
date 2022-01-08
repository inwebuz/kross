<template>
    <Head title="Create Page" />
    <div class="container mx-auto px-6 py-16">
        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-4">Create Setting</h1>

        <Form />

    </div>
</template>

<script setup>
import Breadcrumbs from "../../../Shared/Breadcrumbs";
import Form from "../../../Shared/Settings/Form";
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
        name: "Create",
        url: "",
    },
];
</script>
