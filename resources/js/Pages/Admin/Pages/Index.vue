<template>
    <Head title="Pages" />
    <div class="container mx-auto px-6 py-16">
        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-6">Pages</h1>

        <div
            v-if="$page.props.flash.success"
            class="bg-green-100 text-green-700 rounded my-4 p-4 font-semibold"
            v-text="$page.props.flash.success"
        ></div>

        <!-- <div class="my-4">
            <Link
                href="/admin/pages/create"
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
                >Create new</Link
            >
        </div> -->

        <div class="my-4">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="">
                    <tr>
                        <th
                            class="
                                px-6
                                py-3
                                text-left
                                font-bold
                                uppercase
                                tracking-wider
                            "
                        >
                            Name
                        </th>
                        <th class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr v-for="(page, index) in pages.data" :key="index">
                        <td class="px-6 py-4 text-sm">
                            {{ page.name }}
                        </td>
                        <td class="px-6 py-4 text-right text-sm font-bold">
                            <Link
                                :href="'/admin/pages/' + page.id + '/edit'"
                                class="
                                    font-normal
                                    text-yellow-600
                                    hover:text-yellow-900
                                    mr-2
                                "
                            >
                                Edit
                            </Link>
                            <!-- <Link
                                :href="'/admin/pages/' + page.id"
                                as="button"
                                method="DELETE"
                                class="text-red-600 hover:text-red-900"
                            >
                                Delete
                            </Link> -->
                        </td>
                    </tr>
                </tbody>
            </table>

            <Pagination
                v-if="pages.last_page > 1"
                :links="pages.links"
                class="mt-4"
            />
        </div>

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from "../../../Shared/Pagination";
import Breadcrumbs from "../../../Shared/Breadcrumbs";
export default {
    data() {
        return {
            audio: null,
            currentTrackIndex: null,
            breadcrumbs: [
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
                    url: "",
                },
            ],
        };
    },
    components: { Link, Pagination, Breadcrumbs },
    props: {
        pages: Object,
    },
    mounted() {
        // console.log(this.pages)
    },
};
</script>
