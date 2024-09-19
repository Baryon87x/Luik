<template>
    <section class="h-auto w-full">

        <div class="container flex justify-center items-center mt-16 md:px-4">
            <div class=" max-sm:hidden md:grid grid-cols-2 place-items-center">
                <div class="md:ps-5">
                    <span class="text-sm md:text-md lg:text-lg"> Offre du jour</span>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold my-5">Sac à dos en cuir</h2>
                    <p class="text-sm md:text-md lg:text-lg">Notre robuste sac à dos Reporter deviendra certainement un élément indispensable de votre répertoire d'accessoires.</p>
                    <div class="mt-16 h-full w-full">
                        <Link class="py-2 px-3 text-nowrap md:py-3 md:px-5 text-sm md:text-md lg:text-lg bg-black text-white
                         rounded-sm hover:bg-[#D4A533] duration-300 ease-in-out">Découvrir maintenant</Link>
                    </div>
                </div>
                <img :src="img.url" :alt="img.title" class="bg-no-repeat object-cover h-auto w-[40em] max-sm:ms-4">
            </div>
            <div class="hidden max-sm:grid grid-cols-1 place-items-center">
                <div class="md:ps-5">
                    <span class="text-sm md:text-md lg:text-lg"> Offre du jour</span>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold my-5">Sac à dos en cuir</h2>
                    <p class="text-sm md:text-md lg:text-lg">Notre robuste sac à dos Reporter deviendra certainement un élément indispensable de votre répertoire d'accessoires.</p>
                </div>
                <img :src="img.url" :alt="img.title" class="bg-no-repeat object-cover h-auto w-[40em] max-sm:ms-4">
                <div class="mt-16 h-full w-full">
                    <Link class="py-2 px-3 text-nowrap md:py-3 md:px-5 text-sm md:text-md lg:text-lg bg-black text-white
                     rounded-sm hover:bg-[#D4A533] duration-300 ease-in-out">Découvrir maintenant</Link>
                </div>
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