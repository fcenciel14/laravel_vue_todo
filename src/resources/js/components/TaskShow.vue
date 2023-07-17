<script setup>
import Button from './Button.vue';

const props = defineProps({
    taskId: String,
});
</script>

<template>
    <v-sheet width="300" class="mx-auto">
        <v-form disabled>
            <v-text-field label="id" :model-value="taskId"></v-text-field>
            <v-text-field label="Title"></v-text-field>
            <v-text-field label="Content"></v-text-field>
            <v-text-field label="PIC"></v-text-field>
            <Button link="/tasks" block name="Back" />
        </v-form>
    </v-sheet>
</template>
