<template>
    <Head title="Dashboard" />
    <div class="container mx-auto px-6 py-16">

        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

        <div
            v-if="$page.props.flash.success"
            class="bg-green-100 text-green-700 rounded my-4 p-4 font-semibold"
            v-text="$page.props.flash.success"
        ></div>

        <div class="my-4">
            <Link
                href="/admin/songs"
                class="
                    uppercase
                    py-2
                    px-3
                    text-sm
                    rounded-lg
                    bg-red-600
                    border-2 border-transparent
                    text-white
                    mr-4
                    hover:bg-red-500
                "
                >Songs</Link
            >
            <Link
                href="/admin/pages"
                class="
                    uppercase
                    py-2
                    px-3
                    text-sm
                    rounded-lg
                    bg-red-600
                    border-2 border-transparent
                    text-white
                    mr-4
                    hover:bg-red-500
                "
                >Pages</Link
            >
            <Link
                href="/admin/settings"
                class="
                    uppercase
                    py-2
                    px-3
                    text-sm
                    rounded-lg
                    bg-red-600
                    border-2 border-transparent
                    text-white
                    mr-4
                    hover:bg-red-500
                "
                >Settings</Link
            >
            <Link
                href="/logout"
                method="POST"
                class="
                    uppercase
                    py-2
                    px-3
                    text-sm
                    rounded-lg
                    border-2 border-red-600
                    text-red-500
                    mr-4
                    hover:bg-red-600
                    hover:text-white
                "
                >Logout</Link
            >
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Breadcrumbs from '../../../Shared/Breadcrumbs'
export default {
    data() {
        return {
            breadcrumbs: [
                {
                    name: 'Home',
                    url: '/',
                },
                {
                    name: 'Admin',
                    url: '',
                },
            ],
        }
    },
    components: { Link, Breadcrumbs },
};
</script>
