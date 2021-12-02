<template>
    <footer class="h-24 border-t flex items-center z-30 w-full dark:bg-gray-800 bg-white ">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <div class="text-gray-800 dark:text-white">
                &copy; 2021 KROSS. Все права защищены
            </div>
            <div class="flex items-center">
                <Social />
            </div>
        </div>
    </footer>
</template>

<script>
import Social from './Social'
import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: { Social, Link }
}
</script>
