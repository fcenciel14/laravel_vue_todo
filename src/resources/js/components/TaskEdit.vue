<script setup>
import Button from './Button.vue';

const props = defineProps({
    taskId: String,
});
</script>

<template>
    <v-sheet width="300" class="mx-auto">
        <v-form>
            <v-text-field label="id" :model-value="taskId" readonly></v-text-field>
            <v-text-field label="Title"></v-text-field>
            <v-text-field label="Content"></v-text-field>
            <v-text-field label="PIC"></v-text-field>
            <Button link="/tasks" color="#006400" block name="Save" />
        </v-form>
    </v-sheet>
</template>
