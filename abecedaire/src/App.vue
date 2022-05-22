<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import TitleHeader from './components/TitleHeader.vue'
import TitleAbecedaire from './components/TitleAbecedaire.vue'
</script>

<template>
  <header>
    <TitleAbecedaire />
  </header>


  <RouterView />

  <footer>
    <TitleHeader/>
  </footer>
</template>

<style>
@import '@/assets/base.css';


</style>
