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
                />
                <div
                    v-if="form.errors.name"
                    v-text="form.errors.name"
                    class="text-red-600 text-xs mt-1"
                    required
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
                    required
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
                <div class="my-3 w-20" v-if="song">
                    <img :src="song.cover" :alt="song.name" class="max-w-full" />
                </div>
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
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
const props = defineProps({
    song: Object,
});
let form = useForm({
    name: props.song ? props.song.name : null,
    artist: props.song ? props.song.artist : null,
    file: null,
    image: null,
});
let submit = () => {
    let isEdit = props.song ? true : false;
    if (isEdit) {
        form.put("/admin/songs/" + props.song.id, {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    } else {
        form.post("/admin/songs", {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    }
};
</script>
