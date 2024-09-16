<template>
    <div class="bg-[#F6F1E7]">
        <div class="container mx-auto p-8">
            <Header/>
        </div>
        <Hero/>
    </div>
    <div class="container mx-auto">
        <Boutique/>
        <Footer/>
    </div>
</template>
<script setup>
import Boutique from './Boutique.vue';
import Footer from './Footer.vue';
import Header from './Header.vue';
import Hero from './Hero.vue';

</script>