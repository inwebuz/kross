<template>
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
                    required
                />
                <div
                    v-if="form.errors.name"
                    v-text="form.errors.name"
                    class="text-red-600 text-xs mt-1"
                    required
                ></div>
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-bold">Description</label>
                <editor v-model="form.description" />
                <!-- <textarea
                    type="text"
                    class="border border-gray-400 p-2 w-full text-black"
                    v-model="form.description"
                ></textarea> -->
                <div
                    v-if="form.errors.description"
                    v-text="form.errors.description"
                    class="text-red-600 text-xs mt-1"
                ></div>
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-bold">SEO title</label>
                <input
                    type="text"
                    class="border border-gray-400 p-2 w-full text-black"
                    v-model="form.seo_title"
                />
                <div
                    v-if="form.errors.seo_title"
                    v-text="form.errors.seo_title"
                    class="text-red-600 text-xs mt-1"
                ></div>
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-bold">Meta description</label>
                <input
                    type="text"
                    class="border border-gray-400 p-2 w-full text-black"
                    v-model="form.meta_description"
                />
                <div
                    v-if="form.errors.meta_description"
                    v-text="form.errors.meta_description"
                    class="text-red-600 text-xs mt-1"
                ></div>
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-bold">Meta keywords</label>
                <input
                    type="text"
                    class="border border-gray-400 p-2 w-full text-black"
                    v-model="form.meta_keywords"
                />
                <div
                    v-if="form.errors.meta_keywords"
                    v-text="form.errors.meta_keywords"
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
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import Editor from "../../Shared/Editor"
const props = defineProps({
    page: Object,
});
let form = useForm({
    name: props.page ? props.page.name : null,
    description: props.page ? props.page.description : null,
    seo_title: props.page ? props.page.seo_title : null,
    meta_description: props.page ? props.page.meta_description : null,
    meta_keywords: props.page ? props.page.meta_keywords : null,
});
let submit = () => {
    let isEdit = props.page ? true : false;
    if (isEdit) {
        form.put("/admin/pages/" + props.page.id, {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    } else {
        form.post("/admin/pages", {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    }
};
</script>
