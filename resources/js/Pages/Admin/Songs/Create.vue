<template>
    <Head title="Create Song" />
    <div class="container mx-auto px-6 py-16">
        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-4">Create Song</h1>

        <div class="my-4">
            <form @submit.prevent="submit" class="max-w-2xl">
                <div
                    v-if="$page.props.flash.success"
                    class="
                        bg-green-100
                        text-green-700
                        rounded
                        my-4
                        p-4
                        font-semibold
                    "
                    v-text="$page.props.flash.success"
                ></div>
                <div class="mb-6">
                    <label class="block mb-2 font-bold">Name</label>
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full text-black"
                        v-model="form.name"
                    />
                    <div
                        v-if="form.errors.name"
                        v-text="form.errors.name"
                        class="text-red-600 text-xs mt-1"
                    ></div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 font-bold">Artist</label>
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full text-black"
                        v-model="form.artist"
                    />
                    <div
                        v-if="form.errors.artist"
                        v-text="form.errors.artist"
                        class="text-red-600 text-xs mt-1"
                    ></div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 font-bold">File</label>
                    <input
                        type="file"
                        @input="form.file = $event.target.files[0]"
                        class="w-full"
                    />
                    <div
                        v-if="form.errors.file"
                        v-text="form.errors.file"
                        class="text-red-600 text-xs mt-1"
                    ></div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 font-bold">Cover</label>
                    <input
                        type="file"
                        @input="form.image = $event.target.files[0]"
                        class="w-full"
                    />
                    <div
                        v-if="form.errors.image"
                        v-text="form.errors.image"
                        class="text-red-600 text-xs mt-1"
                    ></div>
                </div>
                <div class="mb-6">
                    <progress
                        v-if="form.progress"
                        :value="form.progress.percentage"
                        max="100"
                    >
                        {{ form.progress.percentage }}%
                    </progress>
                </div>
                <div class="mb-6">
                    <button
                        type="submit"
                        class="
                            uppercase
                            py-2
                            px-4
                            rounded-lg
                            bg-red-600
                            border-2 border-transparent
                            text-white text-md
                            mr-4
                            hover:bg-red-500
                        "
                    >
                        Send
                    </button>
                </div>
            </form>
        </div>

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script setup>
import { reactive, ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
import Breadcrumbs from "../../../Shared/Breadcrumbs";
let form = useForm({
    name: null,
    artist: null,
    file: null,
    image: null,
});
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
        name: "Create",
        url: "",
    },
];
let submit = () => {
    form.post("/admin/songs", {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};
</script>
