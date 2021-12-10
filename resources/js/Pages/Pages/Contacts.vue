<template>
    <div class="container mx-auto px-6 py-16">
        <div class="max-w-4xl">
            <h1 class="text-3xl font-bold mb-4">{{ page.name }}</h1>
            <div class="text-xl mb-6">
                <div class="mb-3">
                    <a :href="'tel:' + settings.phone.value" class="text-white hover:text-red-500 transition-all flex items-center whitespace-nowrap">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 891.024 891.024" style="enable-background:new 0 0 891.024 891.024;" xml:space="preserve" class="w-4 h-4 mr-2" fill="currentColor">
                            <path d="M2.8,180.875c46.6,134,144.7,286.2,282.9,424.399c138.2,138.2,290.4,236.301,424.4,282.9c18.2,6.3,38.3,1.8,52-11.8
                                l92.7-92.7l21.6-21.6c19.5-19.5,19.5-51.2,0-70.7l-143.5-143.4c-19.5-19.5-51.2-19.5-70.7,0l-38.899,38.9
                                c-20.2,20.2-52.4,22.2-75,4.6c-44.7-34.8-89-73.899-131.9-116.8c-42.9-42.9-82-87.2-116.8-131.9c-17.601-22.6-15.601-54.7,4.6-75
                                l38.9-38.9c19.5-19.5,19.5-51.2,0-70.7l-143.5-143.5c-19.5-19.5-51.2-19.5-70.7,0l-21.6,21.6l-92.7,92.7
                                C1,142.575-3.5,162.675,2.8,180.875z"/>
                        </svg>
                        <span>{{ settings.phone.value }}</span>
                    </a>
                </div>
                <div class="mb-3">
                    <a :href="'mailto:' + settings.email.value" class="text-white hover:text-red-500 transition-all flex items-center whitespace-nowrap">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve" class="w-4 h-4 mr-3 mt-1" fill="currentColor">
                            <polygon id="XMLID_869_" points="0,127.5 0,274.219 104.8,206.1 	"/>
                            <polygon id="XMLID_870_" points="400,274.219 400,127.5 295.2,206.1 	"/>
                            <polygon id="XMLID_871_" points="200,277.5 130.357,225.268 0,310 0,340 400,340 400,310 269.643,225.268 	"/>
                            <polygon id="XMLID_872_" points="0,90 200,240 400,90 400,60 0,60 	"/>
                        </svg>
                        <span>{{ settings.email.value }}</span>
                    </a>
                </div>
            </div>
            <div class="mb-6">
                <h3 class="text-xl font-semibold">Write us</h3>
                <form action="">
                    <div class="mb-3">
                        <label>Your name</label>
                        <input type="text">
                    </div>
                </form>
            </div>
            <div v-html="page.description"></div>
        </div>
    </div>

</template>

<script>
export default {
    props: {
        page: Object,
        settings: Object
    },
    mounted() {
        console.log(this.settings);
    }
}
</script>
