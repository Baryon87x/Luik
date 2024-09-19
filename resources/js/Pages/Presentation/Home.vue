<template>
    <div class="bg-[#F6F1E7]">
        <div class="container mx-auto p-8">
            <Header/>
        </div>
        <Hero/>
    </div>
    <div class="container mx-auto">
        <History/>
        <Team/>
        <Partner/>
        <Footer/>
    </div>
</template>
<script setup>
import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
import Hero from './Hero.vue';
import History from './History.vue';
import Partner from './Partner.vue';
import Team from './Team.vue';
import Vision from './Vision.vue';



</script>