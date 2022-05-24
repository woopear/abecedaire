<script setup lang="ts">
import { useLetterStore } from '@/stores/letter';
import { storeToRefs } from 'pinia';

const letterStore = storeToRefs(useLetterStore())

function selectedLetter(index: number) {
    useLetterStore().selectedIndex(index)
}
</script>

<template>
<div class="box_letter" v-if="letterStore.rawItems.value.length > 0">
    <li v-for="item in letterStore.rawItems.value" :key="item.lettre">
        <button @click="selectedLetter(item.id - 1)">
            <span v-if="item.id - 1 === letterStore.index.value" style="color: red;">
                {{ item.lettre }}
            </span>
            <span v-else>
                {{ item.lettre }}
            </span>
        </button>
    </li>
</div>
</template>

<style>
@import '@/assets/base.css';

.box_letter {
    display: flex;
    margin-top: 40px;
}

li {
    list-style: none;
}

li button {
    background-color: transparent;
    color: white;
    border: none;
    font-size: 28px;
    padding: 10px;
}

li button:hover {
    background-color: transparent;
    color: red;
    border: none;
    font-size: 28px;
    cursor: pointer;
    margin-top: -10px;
}

</style>