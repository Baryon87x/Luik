<template>
    <div class="bg-[#F6F1E7]">
        <div class="container mx-auto p-8">
            <Header/>
            <Hero/>
        </div>
    </div>
    <div class="container mx-auto">
        <Product1/>
        <TopCategorie/>
        <LookBook/>
        <TopCategorie2/>
        <Footer/>
    </div>
</template>
<script setup>
import Footer from './Footer.vue';
import Header from './Header.vue';
import Hero from './Hero.vue'
import LookBook from './LookBook.vue';
import Product1 from './Product1.vue';
import TopCategorie from './TopCategorie.vue';
import TopCategorie2 from './TopCategorie2.vue';

</script>