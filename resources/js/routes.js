import Home from './components/Home.vue';
import Welcome from './components/Welcome.vue';
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';
import Gallery from './components/Gallery.vue';
import Cart from './components/Cart.vue';

import Users from './components/admin/Users.vue';

import CreateDish from './components/dishes/Create.vue';

export const routes = [
    {
        path: "/",
        component: Welcome,
    },
    {
        path: "/welcome",
        component: Home,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: "/login",
        component: Login
    },
    {
        path: "/register",
        component: Register
    },
    {
        path: "/gallery",
        component: Gallery
    },
    {
        path: "/cart",
        component: Cart,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: "/admin/users",
        component: Users,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: "/admin/dishes/add",
        component: CreateDish,
        meta: {
            requiresAuth: true
        }
    }
];