<script setup>
import { ref, onMounted } from 'vue';
import Button from './Button.vue';

const tasks = ref({});

function getTasks() {
    fetch('http://localhost:80/api/tasks')
        .then((res) => res.json())
        .then((json) => (tasks.value = json));
}

onMounted(() => {
    getTasks();
});

function deleteTask(id) {
    fetch(`http://localhost:80/api/tasks/${id}`, {
        method: 'DELETE',
    }).then((res) => getTasks());
}
</script>

<template>
    <v-table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>PIC</th>
                <th>Detail</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="task in tasks" key="task.id">
                <th>{{ task.id }}</th>
                <td>{{ task.title }}</td>
                <td>{{ task.content }}</td>
                <td>{{ task.pic }}</td>
                <td><Button :link="`/tasks/${task.id}`" name="Detail" /></td>
                <td><Button :link="`/tasks/${task.id}/edit`" color="#006400" name="Edit" /></td>
                <td><Button color="#FF0000" name="Delete" @click="deleteTask(task.id)" /></td>
            </tr>
        </tbody>
    </v-table>
</template>
