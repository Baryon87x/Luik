<template>
    <div class="bg-[#F6F1E7]">
        <div class=" p-8">
            <Header/>
            <Hero/>
        </div>
    </div>
    <div class="">
        <Product1/>
        <TopCategorie/>
        <LookBook/>
        <TopCategorie2/>
        <Footer/>
    </div>
</template>
<script setup>
import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
import Hero from './Hero.vue'
import LookBook from './LookBook.vue';
import Product1 from './Product1.vue';
import TopCategorie from './TopCategorie.vue';
import TopCategorie2 from './TopCategorie2.vue';

</script>