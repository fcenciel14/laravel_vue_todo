<script setup>
import { ref, onMounted } from 'vue';
import router from '../router';
import Button from './Button.vue';

const props = defineProps({
    taskId: String,
});

const task = ref({});

function getTask() {
    fetch(`http://localhost:80/api/tasks/${props.taskId}`)
        .then((res) => res.json())
        .then((data) => (task.value = data));
}

function submit(task) {
    fetch(`http://localhost:80/api/tasks/${props.taskId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            title: task.title,
            content: task.content,
            pic: task.pic,
        }),
    }).then((res) => router.push('/tasks'));
}

onMounted(() => {
    getTask();
});
</script>

<template>
    <v-sheet width="300" class="mx-auto">
        <v-form>
            <v-text-field label="id" readonly v-model="task.id"></v-text-field>
            <v-text-field label="Title" v-model="task.title"></v-text-field>
            <v-text-field label="Content" v-model="task.content"></v-text-field>
            <v-text-field label="PIC" v-model="task.pic"></v-text-field>
            <Button link="/tasks" color="#006400" block name="Save" @click="submit(task)" />
        </v-form>
    </v-sheet>
</template>
