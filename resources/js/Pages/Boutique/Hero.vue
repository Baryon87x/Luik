<template>
    <div class="bg-cover bg-center bg-no-repeat h-[400px] lg:h-[530px]"
    :style="{backgroundImage: `url(${img.url})`}">
        <div class="container mx-auto py-36">
            <h1 class="text-center text-3xl uppercase text-white mb-1">Boutique</h1>
            <div class="flex justify-center items-center">
                <a href="index-1.html" class="text-primary">
                    <svg width="17" height="17" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m16 2.594l-.719.687l-13 13L3.72 17.72L5 16.437V28h9V18h4v10h9V16.437l1.281 1.282l1.438-1.438l-13-13zm0 2.844l9 9V26h-5V16h-8v10H7V14.437z" />
                    </svg>
                </a>
                <span class="text-white">
                    <svg width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" /></svg>
                </span>
                <a href="#" class="text-white">Boutique</a>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
const img = {
    id: 1,
    url: new URL('/public/assets/images/shop.jpg',import.meta.url).href
}
</script>