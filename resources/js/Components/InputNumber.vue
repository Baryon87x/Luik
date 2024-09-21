<style scoped>
input[type='number']::-webkit-inner-spin-button{
    display: none;
}
input[type="number"]{
    -moz-appearance: textfield;
}
</style>
<template>
    <div class="flex">
        <div @click="increment" class="w-8 flex justify-center items-center border">
            <i class="pi pi-plus"></i>
        </div>
        <input 
            type="number" 
            v-model="number"
            inputmode="numeric" 
            pattern="[0-9]+"
            class="w-8 p-0 text-center border"
            :min="0"
            />
        <div @click="decrement" class="w-8 flex justify-center items-center border">
            <i class="pi pi-minus"></i>
        </div>
    </div>
</template>
<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    'horizontal': {

    }
});

const inputNumber = ref();
const number = ref(0);



onMounted(()=>{
    inputNumber.value = document.querySelector("input[type='number']");
})

function increment(){
    number.value ++;
}
function decrement(){
    if(number.value<=0) {
        number.value = 0;
    }else{
        number.value --;
    }
}
</script>