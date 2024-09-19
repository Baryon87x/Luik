<style scoped>
.div-custome:hover >:nth-child(2) {
    transform: translateY(20px);
}
</style>
<template>
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <template v-for="(item,index) in images" :key="index">
            <Link class="div-custome border flex flex-col justify-center items-center h-auto py-10">
                <img :src="item.url" alt="" class="bg-no-repeat h-auto w-40 object-cover mt-10">
                <div class="text-center duration-300 ease-in-out">
                    <span class="text-yellow-300">#{{item.title}}</span>
                    <h3 class="font-bold text-lg">SAC</h3>
                    <Link class="text-md text-slate-500">Découvrir plus</Link>
                </div>
            </Link>
        </template>
    </section>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

const images = [
    {
        id: 1,
        title: 'sac 1',
        url: new URL('/public/images/sacs/sac-1.png',import.meta.url).href
    },
    {
        id: 2,
        title: 'sac 2',
        url: new URL('/public/images/sacs/sac-2.png',import.meta.url).href
    },
    {
        id: 3,
        title: 'sac 3',
        url: new URL('/public/images/sacs/sac-3.png',import.meta.url).href
    },
    {
        id: 4,
        title: 'sac 4',
        url: new URL('/public/images/sacs/sac-4.png',import.meta.url).href
    },
]
</script>