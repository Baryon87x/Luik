<template>
    <div class="bg-[#F6F1E7]">
        <div class=" p-8">
            <Header/>
        </div>
    </div>
    <Panier :page_data="page_data"/>
    <div class="">
        <Footer/>
    </div>
</template>
<script setup>
import Header from '@/Layouts/Header.vue';
import Footer from '@/Layouts/Footer.vue';
import Panier from './Panier.vue';
defineProps({
    'page_data':{
        type:Object,
        required:true
    }
})
</script>