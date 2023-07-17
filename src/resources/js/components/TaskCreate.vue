<script setup>
import Button from './Button.vue';
</script>

<template>
    <v-sheet width="300" class="mx-auto">
        <v-form>
            <v-text-field label="Title"></v-text-field>
            <v-text-field label="Content"></v-text-field>
            <v-text-field label="PIC"></v-text-field>
            <Button color="#006400" name="Add" block class="mt-2" />
        </v-form>
    </v-sheet>
</template>
