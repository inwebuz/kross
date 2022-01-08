<template>
    <footer class="h-24 border-t border-gray-700 flex items-center z-30 w-full">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <div class="text-sm">
                &copy; 2021 KROSS. All rights reserved
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
