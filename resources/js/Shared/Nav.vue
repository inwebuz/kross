<template>
    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex flex-col lg:flex-row items-center fixed lg:static w-screen h-screen lg:w-auto lg:h-auto" :class="{hidden: isHidden}" >
        <Link href="/" class="py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Pages/Home'}">Home</Link>
        <Link href="/songs" class="py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Songs/Index'}">Songs</Link>
        <Link href="/services" class="py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Pages/Common' && $page.url == '/services'}">Services</Link>
        <Link href="/contacts" class="py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Pages/Contacts'}">Contacts</Link>
    </nav>
    <button class="lg:hidden flex flex-col ml-4" @click="showMobileNav">
        <span class="w-6 h-1 bg-white mb-1">
        </span>
        <span class="w-6 h-1 bg-white mb-1">
        </span>
        <span class="w-6 h-1 bg-white mb-1">
        </span>
    </button>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    data() {
        return {
            isHidden: true
        }
    },
    components: { Link },
    methods: {
        showMobileNav() {
            this.isHidden = !this.isHidden  ;
        }
    }
}
</script>
