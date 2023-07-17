<script setup>
import Button from './Button.vue';
const tasks = [
    {
        id: 1,
        title: 'Tmp Title1',
        content: 'Tmp Content1',
        pic: 'Tmp PIC1',
    },
    {
        id: 2,
        title: 'Tmp Title2',
        content: 'Tmp Content2',
        pic: 'Tmp PIC2',
    },
    {
        id: 3,
        title: 'Tmp Title3',
        content: 'Tmp Content3',
        pic: 'Tmp PIC3',
    },
];
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
                <td><Button color="#FF0000" name="Delete" /></td>
            </tr>
        </tbody>
    </v-table>
</template>
