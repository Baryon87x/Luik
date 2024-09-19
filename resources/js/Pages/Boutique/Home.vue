<template>
    <div class="bg-[#F6F1E7]">
        <div class="container mx-auto p-8">
            <Header/>
        </div>
        <Hero/>
    </div>
    <Boutique :data_item="page_data" :categories="categories"/>
    <div class="container mx-auto">
        <Footer/>
    </div>
</template>
<script setup>
import Footer from '@/Layouts/Footer.vue';
import Header from '@/Layouts/Header.vue';
import Boutique from './Boutique.vue';
import Hero from './Hero.vue';

defineProps({
    'page_data': {
        type: Object,
        required: true,
    },
    'categories':{
        type:Object,
        required: true
    }
})


</script>