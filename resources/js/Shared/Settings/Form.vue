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
                <label class="block mb-2 font-bold">Value</label>
                <input
                    type="text"
                    class="border border-gray-400 p-2 w-full text-black"
                    v-model="form.value"
                    required
                />
                <div
                    v-if="form.errors.value"
                    v-text="form.errors.value"
                    class="text-red-600 text-xs mt-1"
                    required
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
                    Save
                </button>
            </div>
        </form>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
const props = defineProps({
    setting: Object,
});
let form = useForm({
    value: props.setting ? props.setting.value : null,
});
let submit = () => {
    let isEdit = props.setting ? true : false;
    if (isEdit) {
        form.put("/admin/settings/" + props.setting.id, {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    } else {
        form.post("/admin/settings", {
            preserveScroll: true,
            onSuccess: () => form.reset(),
        });
    }
};
</script>
