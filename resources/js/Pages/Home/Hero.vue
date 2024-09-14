<template>
    <section class="h-screen w-full">

        <div class="container flex justify-center items-center mt-16 px-4">
            <div class="grid grid-cols-2 place-items-center">
                <div class="ps-5">
                    <span class="text-lg"> Hot Deal Off The Day</span>
                    <h2 class="text-5xl font-bold my-5">Leather Backpack</h2>
                    <p class="text-lg">Our robust Reporter Backpack is sure to become an indispensable part  of your accessories repertoire.</p>
                    <div class="mt-16 h-full w-full">
                        <Link class="py-3 px-5  bg-black text-white rounded-sm hover:bg-[#D4A533] duration-300 ease-in-out">Découvrir maintenant</Link>
                    </div>
                </div>
                <img :src="img.url" :alt="img.title" class="bg-no-repeat object-cover h-auto w-[40em]">
            </div>
        </div>
    </section>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

const img = {
    title: 'sac',
    url: new URL('/public/images/sacs/sac-1.png',import.meta.url).href
}
</script>