<script setup>
import { ref, onMounted } from 'vue';
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

onMounted(() => {
    getTask();
});
</script>

<template>
    <v-sheet width="300" class="mx-auto">
        <v-form disabled>
            <v-text-field label="id" v-model="task.id"></v-text-field>
            <v-text-field label="Title" v-model="task.title"></v-text-field>
            <v-text-field label="Content" v-model="task.content"></v-text-field>
            <v-text-field label="PIC" v-model="task.pic"></v-text-field>
            <Button link="/tasks" block name="Back" />
        </v-form>
    </v-sheet>
</template>
