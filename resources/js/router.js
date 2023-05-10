import {createRouter, createWebHistory} from "vue-router";



const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/people', component: () => import ('./views/Person/Index.vue'),
            name: 'person.index',
        },
        {
            path: '/people/create', component: () =>  import ('./views/Person/Create.vue'),
            name: 'person.create',
        },
        {
            path: '/people/:id/edit', component: () => import('./views/Person/Edit.vue'),
            name: 'person.edit',
        },
        {
            path: '/people/:id', component: () => import('./views/Person/Show.vue'),
            name: 'person.show',
        },
    ],
})

export default router


