<template>
    <div class="flex justify-between items-center ">
        <span>LOGO</span>
        <nav class="">
            <ul class="flex space-x-5 font-bold md:text-md">
                <li><Link :href="route('home')">Accueil</Link></li>
                <li><Link :href="route('boutique')">Boutique</Link></li>
                <li><Link :href="route('presentation')">À propos de nous</Link></li>
                <li><Link :href="route('nous-contacter')">Nous contacter</Link></li>
            </ul>
        </nav>
        <div class="flex justify-center items-center space-x-5">
            <span @click="toggle" >Connexion/Inscription</span>
            <!-- <Button type="button" icon="pi pi-ellipsis-v" /> -->
            <Menu ref="menu" :autoZIndex="true" style="background-color:white;border-radius: 0.150rem;" class="p-2 rounded-sm" id="overlay_menu" :model="items" :popup="true"/>
            <i class="pi pi-search"></i>
            <div class="">
                <i class="pi pi-shopping-cart"></i>
            </div>
        </div>
    </div>
</template>
<script setup>

import Menu from 'primevue/menu';
import { Link } from '@inertiajs/vue3';
import { ref } from "vue";

const menu = ref();
const items = ref([
    {
        items: [
            {
                label: 'Refresh',
                icon: 'pi pi-refresh',
                class: 'my-2 p-2 rounded-md hover:bg-slate-300'
            },
            {
                label: 'Export',
                icon: 'pi pi-upload',
                class: 'p-2 rounded-md hover:bg-slate-300'
            }
        ]
    }
]);

const toggle = (event) => {
    menu.value.toggle(event);
};
</script>