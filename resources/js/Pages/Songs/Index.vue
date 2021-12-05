<template>
    <div class="container mx-auto px-6 py-16">
        <h1 class="text-3xl font-bold mb-4">{{ page.name }}</h1>
        <div v-html="page.description"></div>

        <div id="flat-black-player-container">
            <div id="list-screen" class="slide-in-top">
                <div id="list-screen-header" class="hide-playlist">
                    <img id="up-arrow" src="https://521dimensions.com/img/open-source/amplitudejs/examples/flat-black/up.svg"/>
                    Hide Playlist
                </div>
                <div id="list"></div>
                <div id="list-screen-footer">
                    <div id="list-screen-meta-container">
                        <span data-amplitude-song-info="name" class="song-name"></span>
                        <div class="song-artist-album">
                            <span data-amplitude-song-info="artist"></span>
                        </div>
                    </div>
                    <div class="list-controls">
                        <div class="list-previous amplitude-prev"></div>
                        <div class="list-play-pause amplitude-play-pause"></div>
                        <div class="list-next amplitude-next"></div>
                    </div>
                </div>
            </div>
            <div id="player-screen">
                <div class="player-header down-header">
                    <img id="down" src="https://521dimensions.com/img/open-source/amplitudejs/examples/flat-black/down.svg"/>
                    Show Playlist
                </div>
                <div id="player-top">
                    <img data-amplitude-song-info="cover_art_url"/>
                </div>
                <div id="player-progress-bar-container">
                    <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
                    <progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
                </div>
                <div id="player-middle">
                    <div id="time-container">
                        <span class="amplitude-current-time time-container"></span>
                        <span class="amplitude-duration-time time-container"></span>
                    </div>
                    <div id="meta-container">
                        <span data-amplitude-song-info="name" class="song-name"></span>
                        <div class="song-artist-album">
                            <span data-amplitude-song-info="artist"></span>
                        </div>
                    </div>
                </div>
                <div id="player-bottom">
                    <div id="control-container">
                        <div id="shuffle-container">
                            <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
                        </div>
                        <div id="prev-container">
                            <div class="amplitude-prev" id="previous"></div>
                        </div>
                        <div id="play-pause-container">
                            <div class="amplitude-play-pause" id="play-pause"></div>
                        </div>
                        <div id="next-container">
                            <div class="amplitude-next" id="next"></div>
                        </div>
                        <div id="repeat-container">
                            <div class="amplitude-repeat" id="repeat"></div>
                        </div>
                    </div>
                    <div id="volume-container">
                        <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/flat-black/volume.svg"/><input type="range" class="amplitude-volume-slider" step=".1"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Amplitude from 'amplitudejs'
export default {
    props: {
        page: Object,
        songs: Object,
    },
    mounted() {

        document.addEventListener('DOMContentLoaded', () => {
            this.initAudioPlayerConfig();
        });

        Amplitude.init({
            bindings: {
                37: "prev",
                39: "next",
                32: "play_pause",
            },
            songs: [
                {
                    name: "Risin' High (feat Raashan Ahmad)",
                    artist: "Ancient Astronauts",
                    album: "We Are to Answer",
                    url: "https://521dimensions.com/song/Ancient Astronauts - Risin' High (feat Raashan Ahmad).mp3",
                    cover_art_url:
                        "https://521dimensions.com/img/open-source/amplitudejs/album-art/we-are-to-answer.jpg",
                },
                {
                    name: "The Gun",
                    artist: "Lorn",
                    album: "Ask The Dust",
                    url: "https://521dimensions.com/song/08 The Gun.mp3",
                    cover_art_url:
                        "https://521dimensions.com/img/open-source/amplitudejs/album-art/ask-the-dust.jpg",
                },
                {
                    name: "Anvil",
                    artist: "Lorn",
                    album: "Anvil",
                    url: "https://521dimensions.com/song/LORN - ANVIL.mp3",
                    cover_art_url:
                        "https://521dimensions.com/img/open-source/amplitudejs/album-art/anvil.jpg",
                },
            ],
        });
    }
};

</script>
