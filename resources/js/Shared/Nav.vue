<template>
    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
        <Link href="/" class="py-2 px-6 text-white hover:text-red-500">Home</Link>
        <Link href="/about" class="py-2 px-6 text-white hover:text-red-500">About</Link>
        <Link href="/users" class="py-2 px-6 text-white hover:text-red-500">Users</Link>
        <Link href="/settings" class="py-2 px-6 text-white hover:text-red-500">Settings</Link>
    </nav>
    <button class="lg:hidden flex flex-col ml-4">
        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
        </span>
        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
        </span>
        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
        </span>
    </button>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: { Link }
}
</script>
