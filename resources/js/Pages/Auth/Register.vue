<template>
    <Head title="Register" />
    <div class="container mx-auto px-6 py-16">
        <div class="max-w-4xl">
            <h1 class="text-3xl font-bold mb-6">Register</h1>
            <div class="mb-8">
                <form @submit.prevent="submit" class="max-w-md" method="post">
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
                    <div class="mb-3">
                        <label class="block mb-1">Name</label>
                        <input
                            v-model="form.name"
                            type="text"
                            class="w-full text-black"
                            required
                        />
                        <div
                            v-if="form.errors.name"
                            v-text="form.errors.name"
                            class="text-red-600 text-xs mt-1"
                        ></div>
                    </div>
                    <div class="mb-3">
                        <label class="block mb-1">E-mail</label>
                        <input
                            v-model="form.email"
                            type="email"
                            class="w-full text-black"
                            required
                        />
                        <div
                            v-if="form.errors.email"
                            v-text="form.errors.email"
                            class="text-red-600 text-xs mt-1"
                        ></div>
                    </div>
                    <div class="mb-3">
                        <label class="block mb-1">Password</label>
                        <input
                            v-model="form.password"
                            type="password"
                            class="w-full text-black"
                            required
                        />
                        <div
                            v-if="form.errors.password"
                            v-text="form.errors.password"
                            class="text-red-600 text-xs mt-1"
                        ></div>
                    </div>
                    <div class="mb-3">
                        <label class="block mb-1">Confirm Password</label>
                        <input
                            v-model="form.password_confirmation"
                            type="password"
                            class="w-full text-black"
                            required
                        />
                        <div
                            v-if="form.errors.password_confirmation"
                            v-text="form.errors.password_confirmation"
                            class="text-red-600 text-xs mt-1"
                        ></div>
                    </div>
                    <div class="mb-3">
                        <button
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
                                disabled:bg-gray-200
                            "
                            :disabled="form.processing"
                        >
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
defineProps({
    page: Object,
    settings: Object,
});
let form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
let submit = () => {
    form.post("/register", {
        preserveScroll: true,
        onSuccess: () => form.reset(),
    });
};
</script>
