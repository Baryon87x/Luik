<template>
    <section class="h-screen w-full">
        <div class="text-center my-36 space-y-3">
            <h3 class="text-md text-yellow-300">EXPLORER LE LOOKBOOK</h3>
            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold">PRODUITS LES PLUS VENDUS</h2>
            <p class="text-sm md:text-md lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, doloremque</p>
        </div>
        <div class="grid grid-cols-4">

        </div>
        <div class="flex items-center justify-center w-full">
            <Link class="border-2 border-slate-800 text-nowrap py-3 px-2 lg:py-4 lg:px-5  md:text-lg lg:text-xl
             hover:bg-black hover:text-white duration-200 ease-in-out">AFFICHER TOUTES LES PRODUITS</Link>
        </div>
    </section>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>
