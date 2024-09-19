
<template>
    <main class="flex h-auto w-full justify-around items-start mx-auto container p-8">
        <aside class="h-auto w-auto space-y-5 ps-2">
            <section>
                <h1 class="font-bold text-xl">TOUTES LES CATEGORIES</h1>
                <div v-for="(categorie,index) in categories" :key="index" class="mt-2 ">
                    <Link :href="route('boutique.search',{id:categorie.id})"  class="ps-2 mt-0 hover:ps-5 ease-in-out duration-300 text-slate-600 hover:text-black">{{ categorie.titre }} </Link>
                </div>
            </section>
            <section >
                <h1 class="font-bold text-xl">FILTRE</h1>
                <div class="">
                    <div v-for="(categorie,index) in categories" :key="index" class="mt-2 ">
                        <RadioButton v-model="selectedCategory" :inputId="index" name="dynamic" :value="categorie" />
                        <label :for="index" class="ml-2">{{ categorie}}</label>
                    </div>
                </div>
            </section>
        </aside>
        <article class="card h-auto w-3/4">
            <Suspense>
                <DataView :value="data_item" :layout="layout" paginator :rows="6">
                    <template #header>
                        <div class="flex justify-end">
                            <SelectButton v-model="layout" :options="options" :allowEmpty="false">
                                <template #option="{ option }">
                                    <i :class="[option === 'list' ? 'pi pi-bars' : 'pi pi-table']" />
                                </template>
                            </SelectButton>
                        </div>
                    </template>
                    <template #list="slotProps">
                        <div class="flex flex-col">
                            <div v-for="(item, index) in slotProps.items" :key="index">
                                <div class="flex flex-col sm:flex-row sm:items-center p-6 gap-4" :class="{ 'border-t border-surface-200 dark:border-surface-700': index !== 0 }">
                                    <div class="md:w-40 relative">
                                        <img class="block xl:block mx-auto rounded h-auto w-96" :src="item.image[0].url" :alt="item.nom" />
                                        <Tag :value="item.quantite !=0 ? 'En stock' : 'Rupture de sock' " :severity="getSeverity(item.quantite)" class="absolute  md:text-md dark:!bg-surface-900" style="left: 4px; top: 4px"></Tag>
                                    </div>
                                    <div class="flex flex-col md:flex-row justify-between md:items-center flex-1 gap-6">
                                        <div class="flex flex-row md:flex-col justify-between items-start gap-2">
                                            <div>
                                                <span class="font-medium text-surface-500 dark:text-surface-400 text-sm">{{ item.categorie }}</span>
                                                <div class="text-lg font-medium mt-2">{{ item.nom }}</div>
                                            </div>
                                            <div class="bg-surface-100 p-1" style="border-radius: 30px">
                                                <div class="bg-surface-0 flex items-center gap-2 justify-center py-1 px-2" style="border-radius: 30px; box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.04), 0px 1px 2px 0px rgba(0, 0, 0, 0.06)">
                                                    <!-- <span class="text-surface-900 font-medium text-sm">{{ item.rang }}</span>
                                                    <i class="pi pi-star-fill text-yellow-500"></i> -->
                                                    <Rating v-model="item.rang" readonly disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col md:items-end gap-8">
                                            <span class="text-xl font-semibold">${{ item.prix }}</span>
                                            <div class="flex flex-row-reverse md:flex-row gap-2">
                                                <Button icon="pi pi-heart" outlined></Button>
                                                <Button icon="pi pi-shopping-cart" label="Buy Now" :disabled="item.quantite === 0" class="flex-auto md:flex-initial whitespace-nowrap"></Button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
    
                    <template #grid="slotProps">
                        <div class="grid grid-cols-12 gap-4">
                            <div v-for="(item, index) in slotProps.items" :key="index" class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-6 p-2">
                                <div class="p-6 border border-surface-200 dark:border-surface-700 bg-surface-0 dark:bg-surface-900 rounded flex flex-col">
                                    <div class="bg-surface-50 flex justify-center rounded p-4">
                                        <div class="relative mx-auto">
                                            <img class="rounded w-full" :src="item.image[0].url" :alt="item.nom" style="max-width: 300px"/>
                                            <Tag :value="item.quantite != 0 ? 'En stock' : 'Rupture de stock'" :severity="getSeverity(item.quantite)" class="absolute dark:!bg-surface-900" style="left: 4px; top: 4px"></Tag>
                                        </div>
                                    </div>
                                    <div class="pt-6">
                                        <div class="flex flex-row justify-between items-start gap-2">
                                            <div>
                                                <span class="font-medium text-surface-500 dark:text-surface-400 text-sm">{{ item.categorie }}</span>
                                                <div class="text-lg font-medium mt-1">{{ item.nom }}</div>
                                            </div>
                                            <div class="bg-surface-100 p-1" style="border-radius: 30px">
                                                <div class="bg-surface-0 flex items-center gap-2 justify-center py-1 px-2" style="border-radius: 30px; box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.04), 0px 1px 2px 0px rgba(0, 0, 0, 0.06)">
                                                    <Rating v-model="item.rang" readonly disabled />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-6 mt-6">
                                            <span class="text-2xl font-semibold">{{ item.prix }}</span>
                                            <div class="flex gap-2">
                                                <Button icon="pi pi-shopping-cart" label="Ajouter au panier" :disabled="item.quantite === 0 " class="flex-auto whitespace-nowrap"></Button>
                                                <Button icon="pi pi-heart" outlined></Button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </DataView>
                <template #fallback>
                    <DataView :value="products" :layout="layout">
                        <template #header>
                            <div class="flex justify-end">
                                <SelectButton v-model="layout" :options="options" :allowEmpty="false">
                                    <template #option="{ option }">
                                        <i :class="[option === 'list' ? 'pi pi-bars' : 'pi pi-table']" />
                                    </template>
                                </SelectButton>
                            </div>
                        </template>
            
                        <template #list>
                            <div class="flex flex-col">
                                <div v-for="i in 6" :key="i">
                                    <div class="flex flex-col xl:flex-row xl:items-start p-6 gap-6" :class="{ 'border-t border-surface-200 dark:border-surface-700': i !== 0 }">
                                        <Skeleton class="!w-9/12 sm:!w-64 xl:!w-40 !h-24 mx-auto" />
                                        <div class="flex flex-col sm:flex-row justify-between items-center xl:items-start flex-1 gap-6">
                                            <div class="flex flex-col items-center sm:items-start gap-4">
                                                <Skeleton width="8rem" height="2rem" />
                                                <Skeleton width="6rem" height="1rem" />
            
                                                <div class="flex items-center gap-4">
                                                    <Skeleton width="6rem" height="1rem" />
                                                    <Skeleton width="3rem" height="1rem" />
                                                </div>
                                            </div>
                                            <div class="flex sm:flex-col items-center sm:items-end gap-4 sm:gap-2">
                                                <Skeleton width="4rem" height="2rem" />
                                                <Skeleton size="3rem" shape="circle" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
            
                        <template #grid>
                            <div class="grid grid-cols-12 gap-4">
                                <div v-for="i in 6" :key="i" class="col-span-12 sm:col-span-6 xl:col-span-4 p-2">
                                    <div class="p-6 border border-surface-200 dark:border-surface-700 bg-surface-0 dark:bg-surface-900 rounded">
                                        <div class="flex flex-wrap items-center justify-between gap-2">
                                            <Skeleton width="6rem" height="2rem" />
                                            <Skeleton width="3rem" height="1rem" />
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <Skeleton width="4rem" height="2rem" />
                                            <Skeleton width="6rem" height="1rem" shape="circle" size="3rem" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </DataView>
                </template>
            </Suspense>
        </article>
    </main>
</template>
<script setup>
import DataView from 'primevue/dataview';
import SelectButton from 'primevue/selectbutton';
import Rating from 'primevue/rating';
import Button from 'primevue/button';
import RadioButton from 'primevue/radiobutton';
import Tag from 'primevue/tag';
import { ref, Suspense } from 'vue';
import { Link } from '@inertiajs/vue3';
defineProps({
    'data_item': {
        type:Object,
        required: true
    },
    'categories':{
        type:Object,
        required:true
    }
})
const selectedCategory = ref()
const layout = ref('list');
const options = ref(['list', 'grid']);

const getSeverity = (product) => {
    if(product  > 0){
        return 'success';
    }else{
        return 'danger';
    }
};
</script>