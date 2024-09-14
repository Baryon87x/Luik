<style scoped>
.image-bg{
    background-image: url(/public//images//lookbook/lookbook-img-2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 50%;
    height: 100%;
}
</style>
<template>
    <section class="h-screen w-full relative">
        <div class="bg-slate-900 h-full w-full">
            <div class="image-bg"></div>
        </div>
        <div class="bg-slate-700 absolute h-full w-full top-0 left-0 opacity-25">
        </div>
        <div class="absolute h-full w-full flex justify-center items-center top-0 left-0 z-40">
            <h1 class="text-yellow-400 font-bold">EXPLORE LOOKBOOK</h1>
        </div>
    </section>
</template>
<script setup>

const images = {
    id: 1,
    title: 'images',
    url: new URL('/public/images/lookbook/lookbook-img-1.jpg',import.meta.url).href
};
</script>