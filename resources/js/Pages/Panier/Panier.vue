<template>
    <section class="flex flex-col my-10 container mx-auto justify-center items-center">
        <h1 class="">Votre panier</h1>
        <main class="">
            <table class="max-sm:hidden table-auto border-collapse border overflow-x-auto
                 border-slate-300 border-spacing-4 sm:w-[40em] md:w-[50em] lg:w-[60em] xl:w-[70em]  ">
                <thead class="text-center">
                    <th class="col-span-2 border border-slate-300">Article</th>
                    <th class="border border-slate-300">Quantité</th>
                    <th class="border border-slate-300">Total prix</th>
                    <th class="border border-slate-300">Action</th>
                </thead>
                <tbody class="">
                    <template v-for="(article,index) in page_data" :key="index">
                        <tr class="">
                            <td class="border-y flex flex-col justify-between">
                                <div class="flex space-x-4">
                                    <img :src="article.image[0].url" :alt="article.image[0].nom" class="h-auto max-sm:w-28 w-52 object-cover">
                                    <p>{{ article.nom }} </p>
                                </div>
                            </td>
                            <td class=" border-y ">
                                <div class="w-full flex justify-center items-center">
                                    <Number/>
                                </div>
                            </td>
                            <td class="border-y text-center">
                                {{ article.prix }}
                            </td>
                            <td class="border-y ">
                                <div class="w-full flex justify-center">
                                    <i class="pi pi-times"></i>
                                </div>

                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>

            <!-- Reponsive -->
            <div class="hidden max-sm:block space-y-4">
                <template v-for="(article,index) in page_data" :key="index">
                    <div class="w-full">
                        <div class="w-full">
                            <img :src="article.image[0].url" :alt="article.image[0].nom" class="h-auto  w-80 object-cover">
                        </div>
                        <div class="text-center my-2">
                            {{ article.prix }}
                        </div>
                        <div class="w-full flex justify-between my-2 items-center">
                            <Number/>
                            <div class="flex justify-center">
                                <i class="pi pi-times"></i>
                            </div>
                        </div>
                    </div>
                </template>

            </div>
        </main>
        <div class="w-full ">
            Total: {{ prixTotal }} fcfa
        </div>
        <div class="text-center mt-5 ">
            <p class="bg-slate-900 text-white py-3 px-4 w-52">Acheter</p>
        </div>
    </section>
</template>
<script setup>
import InputNumber from 'primevue/inputnumber';
import Number from '@/Components/InputNumber.vue';
import { ref } from 'vue';

const props = defineProps({
    'page_data':{
        type:Object,
        required:true
    }
})

const quantite = ref([]);
const prixTotal = ref(0);


for( const index of props.page_data) {
    prixTotal.value += index.prix;
}
</script>