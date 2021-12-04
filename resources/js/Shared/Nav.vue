<template>
    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
        <Link href="/" class="py-2 px-6 text-white hover:text-red-500">Home</Link>
        <Link href="/songs" class="py-2 px-6 text-white hover:text-red-500">Songs</Link>
        <Link href="/services" class="py-2 px-6 text-white hover:text-red-500">Services</Link>
        <Link href="/contacts" class="py-2 px-6 text-white hover:text-red-500">Contacts</Link>
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
