<script setup lang="ts">
import Card from "../components/Card/Card.vue";
import ListLetter from "../components/ListLetter.vue";
</script>

<template>
  <main>
    <div class="box_principal">
      <ListLetter/>
      <Card/>
    </div>
  </main>
</template>

<style>
main {
  display: flex;
  justify-content: center;
}

.box_principal {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  height: 100%;
}
</style>