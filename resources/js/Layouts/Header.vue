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
            <section :class="[search ? searchEnable : searchDisable]" >
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
            <span @click="nav_item" class="hidden max-md:flex cursor-pointer">
                <i class=" pi pi-bars"></i>
            </span>
        </div>

        <!-- Responsive -->
         <nav :class="[ nav ? navEnable : navDisable,'container mx-auto p-4'] ">
            <div class=" w-full flex justify-end ">
                <i @click="nav_item"  class=" cursor-pointer pi pi-times"></i>
            </div>
            <div class=" mt-10">
                <ul class="space-y-2 divide-slate-300 md:text-md block">
                    <li><Link  :href="route('home')">Accueil</Link></li>
                    <li><Link  :href="route('boutique')">Boutique</Link></li>
                    <li><Link  :href="route('presentation')">À propos de nous</Link></li>
                    <li><Link  :href="route('nous-contacter')">Nous contacter</Link></li>
                </ul>
            </div>
            <div class="flex-col flex space-y-4">
                    <Link>connexion</Link>
                    <Link>s'inscrire</Link>
                    <div class="flex space-x-4">
                        <span  @click="search_item" class="cursor-pointer">
                            <i  class="pi pi-search"></i>
                        </span>
                        <span class="">
                            <i class="pi pi-shopping-cart"></i>
                        </span>
                    </div>
            </div>
         </nav>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import InputText from 'primevue/inputtext';
import { ref } from 'vue';
const search = ref(false) ;
const nav = ref(false);

const searchEnable = `fixed flex flex-col  bg-slate-700
 bg-opacity-35 top-0 left-0 opacity-100  h-screen w-full `;
const searchDisable = `hidden  opacity-0 `;

const  navEnable = `md:hidden fixed flex flex-col justify-between translate-x-0 duration-300 ease-in-out
items-start bg-slate-200 bg-opacity-85 h-screen w-2/4 top-0 left-2/4`;
const  navDisable = `md:hidden fixed flex flex-col justify-between translate-x-full duration-300 ease-in-out
 items-start bg-slate-200 bg-opacity-85 h-screen w-2/4 top-0 left-2/4`;
function search_item(){
    search.value = !search.value
}
function nav_item(){
    nav.value = !nav.value
}
</script>