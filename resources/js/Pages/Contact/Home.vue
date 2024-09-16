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

import Menu from 'primevue/menu';
import Contact from './Contact.vue';
import Footer from './Footer.vue';
import Header from './Header.vue';
import Hero from './Hero.vue';


</script>