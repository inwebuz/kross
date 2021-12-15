<template>
    <Head title="Songs" />
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-3xl font-bold mb-4">Songs</h1>

        <div class="my-4">
            <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                File
              </th>
              <th class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            <tr v-for="song in songs" :key="song.id">
              <td class="px-6 py-4 whitespace-nowrap">
                  {{ song.name }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ song.file_name }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <Link :href="'/songs/' + song.id" method="DELETE" class="text-red-600 hover:text-red-900">Delete</Link>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
        </div>

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    songs: Object,
})

</script>
