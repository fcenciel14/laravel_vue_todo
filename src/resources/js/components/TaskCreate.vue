<script setup>
import { ref } from 'vue';
import router from '../router';
import Button from './Button.vue';

const task = ref({});

function submit(task) {
    fetch('http://localhost:80/api/tasks', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            title: task.title,
            content: task.content,
            pic: task.pic,
        }),
    }).then(() => router.push('/tasks'));
}
</script>

<template>
    <v-sheet width="300" class="mx-auto">
        <v-form>
            <v-text-field label="Title" v-model="task.title"></v-text-field>
            <v-text-field label="Content" v-model="task.content"></v-text-field>
            <v-text-field label="PIC" v-model="task.pic"></v-text-field>
            <Button color="#006400" name="Add" block class="mt-2" @click="submit(task)" />
        </v-form>
    </v-sheet>
</template>
