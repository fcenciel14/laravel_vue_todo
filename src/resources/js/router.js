import { createRouter, createWebHistory } from 'vue-router';
import TaskList from './components/TaskList.vue';
import TaskShow from './components/TaskShow.vue';
import TaskCreate from './components/TaskCreate.vue';
import TaskEdit from './components/TaskEdit.vue';

const routes = [
    {
        path: '/',
        component: TaskList,
    },
    {
        path: '/tasks',
        component: TaskList,
    },
    {
        path: '/tasks/:taskId',
        component: TaskShow,
        props: true,
    },
    {
        path: '/tasks/create',
        component: TaskCreate,
    },
    {
        path: '/tasks/:taskId/edit',
        component: TaskEdit,
        props: true,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
