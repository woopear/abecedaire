<script setup lang="ts">
import { storeToRefs } from 'pinia';
import { useLetterStore } from '../../stores/letter';

const letterStore = storeToRefs(useLetterStore())

useLetterStore().getLetters()
</script>

<template>
    <div class="box_card" v-if="letterStore.rawItems.value.length > 0">
        <p>{{letterStore.rawItems.value[letterStore.index.value].lettre}}</p>
        <p>{{letterStore.rawItems.value[letterStore.index.value].mot}}</p>
        <div class="t" v-dompurify-html="letterStore.rawItems.value[letterStore.index.value].def"></div>
    </div>
</template>


<style>
@import '@/assets/base.css';

.box_card {
    background-color: rgba(255, 255, 255, 0.21);
    color: white;
    padding: 0 0 30px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    flex: 1;
    margin: 10px;
    border-radius: 20px;
}

.box_card :nth-child(1){
    font-size: 200px;
    font-family: 'Special Elite';
}

.box_card :nth-child(2){
    font-family: 'Poppins';
    font-size: 30px;
    font-weight: 700;
    margin-top: -70px;
    margin-bottom: 20px;
}

.box_card :nth-child(3){
    font-family: 'Poppins';
    font-size: 22px;
    width: 80%;
    height: 550px;
    text-align: left;
}

.t :nth-child(1){
    font-size: 22px;
    font-family: 'Poppins';
}

</style>