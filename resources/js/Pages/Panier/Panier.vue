<template>
    <section class="flex flex-col my-10 container mx-auto justify-center items-center">
        <h1 class="">Votre panier</h1>
        <main class="overflow-x-auto">
            <table class="table-auto border-collapse border
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
                                    <img :src="article.image[0].url" :alt="article.image[0].nom" class="h-auto w-52 object-cover">
                                    <p>{{ article.nom }} </p>
                                </div>
                            </td>
                            <td class=" border-y ">
                                <div class="w-full flex justify-center">
                                    <InputNumber v-model="quantite[index]" showButtons 
                                     buttonLayout="vertical" style="width: 3rem" :min="0" :max="99">
                                        <template #incrementbuttonicon>
                                            <span class="pi pi-plus" />
                                        </template>
                                        <template #decrementbuttonicon>
                                            <span class="pi pi-minus" />
                                        </template>
                                    </InputNumber>
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

            <!-- Repon-->
        </main>
    </section>
</template>
<script setup>
import InputNumber from 'primevue/inputnumber';
import { ref } from 'vue';

 
defineProps({
    'page_data':{
        type:Object,
        required:true
    }
})

const quantite = ref([]);

</script>