import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Projects from "../views/Projects.vue";
import About from "../views/About.vue";
import Contact from "../views/Contact.vue";

const routes = [
    {
        path: "/",
        name: "",
        component: Home,
    },
    {
        path: "/home",
        name: "home",
        component: Home,
    },
    {
        path: "/projects",
        name: "projects",
        component: Projects,
    },
    {
        path: "/aboutus",
        name: "about",
        component: About,
    },
    {
        path: "/contactus",
        name: "contact",
        component: Contact,
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
