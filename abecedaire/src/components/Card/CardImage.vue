<script setup lang="ts">
import { storeToRefs } from 'pinia';
import { useLetterStore } from '../../stores/letter';

const letterStore = storeToRefs(useLetterStore())
</script>

<template>
    <div 
    v-if="letterStore.rawItems.value.length > 0" 
    class="img_card" 
    :style="{backgroundImage: `url(https://8oj0p722.directus.app/assets/${letterStore.rawItems.value[letterStore.index.value]['image']})`}">
    </div>
</template>

<style>
@import '@/assets/base.css';

.img_card{
    flex: 1;
    background-image: url();
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin: 10px;
    border-radius: 20px;
}

.img_card img{
    width: 100%;
    height: 100%;
}

</style>