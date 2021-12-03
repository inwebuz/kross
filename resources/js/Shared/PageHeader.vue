<template>
    <header class="h-24 border-b border-gray-700 flex items-center z-30 w-full">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <div class="font-black text-3xl">
                <Link href="/">
                    <img src="/images/logo-light.svg" alt="KROSS" width="120">
                </Link>
            </div>
            <div class="flex items-center">
                <Nav />
            </div>
        </div>
    </header>
</template>

<script>
import Nav from './Nav'
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: { Nav, Link }
}
</script>
