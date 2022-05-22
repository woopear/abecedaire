<script setup lang="ts">
import CardLetter from './CardLetter.vue';
import CardImage from './CardImage.vue';
import Arrow from '../Icon/Arrow.vue';
import { storeToRefs } from 'pinia';
import { useLetterStore } from '../../stores/letter';

const letterStore = storeToRefs(useLetterStore())

function incremente() {
    console.log('coucou');
    useLetterStore().incrementeIndex()
}

function decremente() {
    console.log('coucou');
    useLetterStore().decrementeIndex()
}
</script>

<template>
    <section class="card">
        <button @click="decremente" >
            <div class="box_arrow_left">
                <Arrow />
            </div>
        </button>
        
        <CardLetter />
        <CardImage />

        <button @click="incremente">
            <div class="box_arrow_right">
                <Arrow />
            </div>
        </button>
    </section>
</template>

<style>
@import '@/assets/base.css';

.card {
    display: flex;
    margin: 20px 0 10px 0;
    width: 80%;
}

.card button {
    background-color: transparent;
    border: none;
    cursor: pointer;
}

.box_arrow_left {
    margin: auto 0 auto 0;
    transform: rotate(180deg);
}

.box_arrow_right {
    margin: auto 0 auto 0;
}

</style>