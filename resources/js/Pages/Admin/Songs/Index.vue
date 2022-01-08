<template>
    <Head title="Songs" />
    <div class="container mx-auto px-6 py-16">

        <Breadcrumbs :links="breadcrumbs" />

        <h1 class="text-3xl font-bold mb-6">Songs</h1>

        <div
            v-if="$page.props.flash.success"
            class="bg-green-100 text-green-700 rounded my-4 p-4 font-semibold"
            v-text="$page.props.flash.success"
        ></div>

        <div class="my-4">
            <Link
                href="/admin/songs/create"
                class="
                    uppercase
                    py-2
                    px-3
                    text-sm
                    rounded-lg
                    bg-red-600
                    border-2 border-transparent
                    text-white
                    mr-4
                    hover:bg-red-500
                "
                >Create new</Link
            >
        </div>

        <div class="my-4">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                hidden
                xmlns:xlink="http://www.w3.org/1999/xlink"
            >
                <defs>
                    <symbol id="icon-pause" viewBox="0 0 32 32">
                        <title>icon-pause</title>
                        <path
                            d="M16 0.32c-8.64 0-15.68 7.040-15.68 15.68s7.040 15.68 15.68 15.68 15.68-7.040 15.68-15.68-7.040-15.68-15.68-15.68zM16 29.216c-7.296 0-13.216-5.92-13.216-13.216s5.92-13.216 13.216-13.216 13.216 5.92 13.216 13.216-5.92 13.216-13.216 13.216z"
                        ></path>
                        <path
                            d="M16 32c-8.832 0-16-7.168-16-16s7.168-16 16-16 16 7.168 16 16-7.168 16-16 16zM16 0.672c-8.448 0-15.328 6.88-15.328 15.328s6.88 15.328 15.328 15.328c8.448 0 15.328-6.88 15.328-15.328s-6.88-15.328-15.328-15.328zM16 29.568c-7.488 0-13.568-6.080-13.568-13.568s6.080-13.568 13.568-13.568c7.488 0 13.568 6.080 13.568 13.568s-6.080 13.568-13.568 13.568zM16 3.104c-7.104 0-12.896 5.792-12.896 12.896s5.792 12.896 12.896 12.896c7.104 0 12.896-5.792 12.896-12.896s-5.792-12.896-12.896-12.896z"
                        ></path>
                        <path
                            d="M12.16 22.336v0c-0.896 0-1.6-0.704-1.6-1.6v-9.472c0-0.896 0.704-1.6 1.6-1.6v0c0.896 0 1.6 0.704 1.6 1.6v9.504c0 0.864-0.704 1.568-1.6 1.568z"
                        ></path>
                        <path
                            d="M19.84 22.336v0c-0.896 0-1.6-0.704-1.6-1.6v-9.472c0-0.896 0.704-1.6 1.6-1.6v0c0.896 0 1.6 0.704 1.6 1.6v9.504c0 0.864-0.704 1.568-1.6 1.568z"
                        ></path>
                    </symbol>
                    <symbol id="icon-play" viewBox="0 0 32 32">
                        <title>icon-play</title>
                        <path
                            d="M21.216 15.168l-7.616-5.088c-0.672-0.416-1.504 0.032-1.504 0.832v10.176c0 0.8 0.896 1.248 1.504 0.832l7.616-5.088c0.576-0.416 0.576-1.248 0-1.664z"
                        ></path>
                        <path
                            d="M13.056 22.4c-0.224 0-0.416-0.064-0.608-0.16-0.448-0.224-0.704-0.672-0.704-1.152v-10.176c0-0.48 0.256-0.928 0.672-1.152s0.928-0.224 1.344 0.064l7.616 5.088c0.384 0.256 0.608 0.672 0.608 1.088s-0.224 0.864-0.608 1.088l-7.616 5.088c-0.192 0.16-0.448 0.224-0.704 0.224zM13.056 10.272c-0.096 0-0.224 0.032-0.32 0.064-0.224 0.128-0.352 0.32-0.352 0.576v10.176c0 0.256 0.128 0.48 0.352 0.576 0.224 0.128 0.448 0.096 0.64-0.032l7.616-5.088c0.192-0.128 0.288-0.32 0.288-0.544s-0.096-0.416-0.288-0.544l-7.584-5.088c-0.096-0.064-0.224-0.096-0.352-0.096z"
                        ></path>
                        <path
                            d="M16 0.32c-8.64 0-15.68 7.040-15.68 15.68s7.040 15.68 15.68 15.68 15.68-7.040 15.68-15.68-7.040-15.68-15.68-15.68zM16 29.216c-7.296 0-13.216-5.92-13.216-13.216s5.92-13.216 13.216-13.216 13.216 5.92 13.216 13.216-5.92 13.216-13.216 13.216z"
                        ></path>
                        <path
                            d="M16 32c-8.832 0-16-7.168-16-16s7.168-16 16-16 16 7.168 16 16-7.168 16-16 16zM16 0.672c-8.448 0-15.328 6.88-15.328 15.328s6.88 15.328 15.328 15.328c8.448 0 15.328-6.88 15.328-15.328s-6.88-15.328-15.328-15.328zM16 29.568c-7.488 0-13.568-6.080-13.568-13.568s6.080-13.568 13.568-13.568c7.488 0 13.568 6.080 13.568 13.568s-6.080 13.568-13.568 13.568zM16 3.104c-7.104 0-12.896 5.792-12.896 12.896s5.792 12.896 12.896 12.896c7.104 0 12.896-5.792 12.896-12.896s-5.792-12.896-12.896-12.896z"
                        ></path>
                    </symbol>
                </defs>
            </svg>
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="">
                    <tr>
                        <th
                            class="
                                px-6
                                py-3
                                text-left
                                font-bold
                                uppercase
                                tracking-wider
                            "
                        >
                            Name
                        </th>
                        <th
                            class="
                                px-6
                                py-3
                                text-left
                                font-bold
                                uppercase
                                tracking-wider
                            "
                        >
                            File
                        </th>
                        <th class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr v-for="(song, index) in songs.data" :key="index">
                        <td class="px-6 py-4 flex items-center">
                            <svg
                                @click="play(index)"
                                width="24"
                                height="24"
                                fill="#fff"
                                class="mr-2 cursor-pointer"
                            >
                                <use
                                    xlink:href="#icon-pause"
                                    v-if="currentTrackIndex == index"
                                ></use>
                                <use xlink:href="#icon-play" v-else></use>
                            </svg>
                            <span @click="play(index)" class="cursor-pointer">
                                {{ song.name }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            {{ song.file_name }}
                        </td>
                        <td class="px-6 py-4 text-right text-sm font-bold">
                            <Link
                                :href="'/admin/songs/' + song.id + '/edit'"
                                class="font-normal text-yellow-600 hover:text-yellow-900 mr-2"
                            >
                                Edit
                            </Link>
                            <Link
                                :href="'/admin/songs/' + song.id"
                                as="button"
                                method="DELETE"
                                class="text-red-600 hover:text-red-900"
                            >
                                Delete
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>

            <Pagination
                v-if="songs.last_page > 1"
                :links="songs.links"
                class="mt-4"
            />
        </div>

        <!-- <div class="my-4 max-w-lg" v-html="page.description"></div> -->
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from "../../../Shared/Pagination";
import Breadcrumbs from '../../../Shared/Breadcrumbs'
export default {
    data() {
        return {
            audio: null,
            currentTrackIndex: null,
            breadcrumbs: [
                {
                    name: 'Home',
                    url: '/',
                },
                {
                    name: 'Admin',
                    url: '/admin',
                },
                {
                    name: 'Songs',
                    url: '',
                },
            ],
        };
    },
    components: { Link, Pagination, Breadcrumbs },
    props: {
        songs: Object,
    },
    methods: {
        play(index) {
            if (this.audio.paused || index != this.currentTrackIndex) {
                this.currentTrackIndex = index;
                this.audio.currentTime = 0;
                this.audio.src = this.songs.data[index].source;
                this.audio.play();
            } else {
                this.currentTrackIndex = null;
                this.audio.pause();
            }
        },
    },
    created() {
        this.audio = new Audio();
    },
    mounted() {
        // console.log(this.songs)
    },
};
</script>
