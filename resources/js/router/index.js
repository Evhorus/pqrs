
import {createWebHistory, createRouter} from "vue-router";

import Home from '../pages/Home';
import Register from '../pages/Register';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';
import Dependences from '../pages/Dependences';
import AddDependence from '../components/AddDepence';
import EditDependence from '../components/EditDependence';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'dependences',
        path: '/dependences',
        component: Dependences
    },
    {
        name: 'adddependence',
        path: '/dependence/add',
        component: AddDependence
    },
    {
        name: 'editdependence',
        path: '/dependences/edit/:id',
        component: EditDependence
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
