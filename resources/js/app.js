import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "./Shared/Layout";

import Amplitude from 'amplitudejs'

createInertiaApp({
    resolve: (name) => {
        let page = require(`./Pages/${name}`).default;
        if (page.layout === undefined) {
            page.layout = Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({
                methods: {
                    initAudioPlayerConfig: () => {
                        let downHeader = document.getElementsByClassName("down-header");
                        let listScreen = document.getElementById("list-screen");
                        let flatBlackPlayerContainer = document.getElementById("flat-black-player-container");
                        let list = document.getElementById("list");
                        let hidePlaylist = document.getElementsByClassName("hide-playlist");
                        let songPlayedProgress = document.getElementById("song-played-progress");

                        // if (!downHeader.length || !listScreen.length || !flatBlackPlayerContainer.length || !list.length || !hidePlaylist.length || !songPlayedProgress.length) {
                        //     console.log('test111')
                        //     return false;
                        // }

                        window.onkeydown = function (e) {
                            return !(e.keyCode == 32);
                        };

                        /*
                          Handles a click on the down button to slide down the playlist.
                        */
                        downHeader[0]
                            .addEventListener("click", function () {
                                list.style.height = parseInt(flatBlackPlayerContainer.offsetHeight) - 135 + "px";
                                listScreen.classList.remove("slide-out-top");
                                listScreen.classList.add("slide-in-top");
                                listScreen.style.display = "block";
                            });

                        /*
                          Handles a click on the up arrow to hide the list screen.
                        */
                        hidePlaylist[0]
                            .addEventListener("click", function () {
                                listScreen.classList.remove("slide-in-top");
                                listScreen.classList.add("slide-out-top");
                                listScreen.style.display = "none";
                            });

                        /*
                          Handles a click on the song played progress bar.
                        */
                        songPlayedProgress
                            .addEventListener("click", function (e) {
                                var offset = this.getBoundingClientRect();
                                var x = e.pageX - offset.left;

                                Amplitude.setSongPlayedPercentage(
                                    (parseFloat(x) / parseFloat(this.offsetWidth)) * 100
                                );
                            });


                        let img = document.querySelector('img[data-amplitude-song-info="cover_art_url"]');
                        img.style.height = img.offsetWidth + "px";
                    }
                }
            })
            .mount(el);
    },
});

InertiaProgress.init({
    delay: 500,
    color: "#DC2626",
    includeCSS: true,
    showSpinner: true,
});

