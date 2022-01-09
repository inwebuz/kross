<template>
    <nav class="navigation bg-black lg:bg-transparent inset-0 z-30 font-sen text-gray-800 dark:text-white uppercase text-lg flex flex-col lg:flex-row items-center justify-center fixed lg:static w-screen h-screen lg:w-auto lg:h-auto" :class="{active: mobileMenuOpen}" >
        <Link @click="hideMobileNav" href="/" class="block lg:inline-block text-center py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Pages/Home'}">Home</Link>
        <Link @click="hideMobileNav" href="/songs" class="block lg:inline-block text-center py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Songs/Index'}">Songs</Link>
        <Link @click="hideMobileNav" href="/services" class="block lg:inline-block text-center py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Pages/Common' && $page.url == '/services'}">Services</Link>
        <Link @click="hideMobileNav" href="/contacts" class="block lg:inline-block text-center py-2 px-6 text-white hover:text-red-500 transtion-all" :class="{'text-red-500': $page.component == 'Contacts/Index'}">Contacts</Link>
    </nav>
    <button class="lg:hidden flex flex-col ml-4 relative z-40" @click="showMobileNav">
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
            mobileMenuOpen: false
        }
    },
    components: { Link },
    methods: {
        showMobileNav() {
            this.mobileMenuOpen = true;
        },
        hideMobileNav() {
            setTimeout(() => {
                this.mobileMenuOpen = false;
            }, 500);
        }
    }
}
</script>
<style scoped>
.navigation {
    display: none;
}
.navigation.active {
    display: flex;
}
@media screen and (min-width: 1024px) {
    .navigation {
        display: flex;
    }
}
</style>
