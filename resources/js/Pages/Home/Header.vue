<template>
    <div class="flex justify-between items-center ">
        <span>LOGO</span>
        <nav class="">
            <ul class="flex space-x-5 font-bold md:text-md">
                <li><Link>Accueil</Link></li>
                <li><Link>Boutique</Link></li>
                <li><Link>À propos de nous</Link></li>
                <li><Link>Nous contacter</Link></li>
            </ul>
        </nav>
        <div class="flex justify-center items-center space-x-5">
            <span>Connexion/Inscription</span>
            <i class="pi pi-search"></i>
            <div class="">
                <i class="pi pi-shopping-cart"></i>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
</script>