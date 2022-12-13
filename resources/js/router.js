import { createRouter, createWebHistory } from "vue-router";
import Home from "./pages/home.vue";
import Create from "./pages/create.vue";
import Edit from "./pages/edit.vue";
import Index from "./pages/index.vue";
const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/create",
    name: "create",
    component: Create,
  },
  {
    path: "/transactions",
    name: "index",
    component: Index,
  },
  {
    path: "/edit/:id",
    name: "edit",
    component: Edit,
  },
//   {
//     path: "/ts",
//     redirect: "/transactions",
//   },
//   {
//     path: "/:pathMatch(.*)*",
//     component: NotFound,
//   },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL), //createWebHashHistory(process.env.BASE_URL),
  routes,
});

export default router;
