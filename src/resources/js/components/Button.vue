<script setup>
const props = defineProps({
    link: String,
    color: String,
    name: String,
});
</script>

<template>
    <v-btn variant="tonal" :to="link" :color="color">{{ name }}</v-btn>
</template>
