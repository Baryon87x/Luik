<template>
    <div class="flex justify-between items-center ">
        <span class="">LOGO</span>
        <nav class="max-md:hidden">
            <ul class="flex space-x-5 font-bold md:text-md">
                <li><Link :href="route('home')">Accueil</Link></li>
                <li><Link :href="route('boutique')">Boutique</Link></li>
                <li><Link :href="route('presentation')">À propos de nous</Link></li>
                <li><Link :href="route('nous-contacter')">Nous contacter</Link></li>
            </ul>
        </nav>
        <div class="flex justify-center items-center space-x-5 overflow-hidden">
            <section :class="[search ? navEnable : navDisable]" >
                <header class="w-full flex p-8 justify-end">
                    <i @click="search_item"  class="text-white cursor-pointer pi pi-times"></i>
                </header>
                <div class=" flex flex-1 justify-center items-center ">
                    <InputText type="text" class="w-2/3 focus:ring-slate-200 focus:border-white ring-white"/>
                </div>
            </section>
            <div  @click="search_item" class="cursor-pointer">
                <i  class="pi pi-search"></i>
            </div>
            <div class="">
                <i class="pi pi-shopping-cart"></i>
            </div>
            <span class="max-md:hidden">Connexion/Inscription</span>
        </div>

        <!-- Responsive -->
         <nav class="hidden min-lg:flex">
            <div  @click="search_item" class="cursor-pointer">
                <i  class="pi pi-search"></i>
            </div>
            <div class="">
                <i class="pi pi-shopping-cart"></i>
            </div>
            <span class="max-md:hidden">Connexion/Inscription</span>
            <i class="lg:hidden pi pi-bars"></i>
         </nav>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import InputText from 'primevue/inputtext';
import { ref } from 'vue';
const search = ref(false) ;
const navEnable = `fixed flex flex-col  bg-slate-700
 bg-opacity-35 top-0 left-0 opacity-100  h-screen w-full `;
const navDisable = `hidden  opacity-0 `;
function search_item(){
    search.value = !search.value
}
</script>