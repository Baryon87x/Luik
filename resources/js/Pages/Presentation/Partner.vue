<template>
    <div class="container pb-14">
        <h2 class="text-lg lg:text-xl uppercase mb-3 text-center">Nos partenaires</h2>
        <!-- swiper -->
            <div class="flex justify-center items-center">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="assets/images/brand1.png" alt="brand" class="h-auto w-56">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="assets/images/brand2.png" alt="brand" class="h-auto w-56">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="assets/images/brand4.png" alt="brand" class="h-auto w-56">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="assets/images/brand3.png" alt="brand" class="h-auto w-56">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="assets/images/brand1.png" alt="brand" class="h-auto w-56">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <img loading="lazy" src="assets/images/brand4.png" alt="brand" class="h-auto w-56">
                    </div>
                </div>
            </div>
    </div>
</template>
<script setup>
import Splitter from 'primevue/splitter';
import SplitterPanel from 'primevue/splitterpanel';
import DataView from 'primevue/dataview';

</script>