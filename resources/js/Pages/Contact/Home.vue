<template>
    <div class="bg-[#F6F1E7]">
        <div class="container mx-auto p-8">
            <Header/>
        </div>
        <Hero/>
    </div>
    <Contact/>
    <div class="container mx-auto">
        <Footer/>
    </div>
</template>
<script setup>

import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
import Menu from 'primevue/menu';
import Contact from './Contact.vue';
import Hero from './Hero.vue';


</script>