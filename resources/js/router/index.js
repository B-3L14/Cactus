// resources/js/router/index.js
import { createRouter, createWebHistory } from 'vue-router'
import Home from '../pages/Home.vue'
import Login from '../pages/Login.vue'
import Plans from '../pages/Plans.vue'
import Simulations from '../pages/Simulations.vue'
import Products from '../pages/Products.vue'
import Resources from '../pages/Resources.vue'
import AboutUs from '../pages/AboutUs.vue'

const routes = [
  { path: '/', name: 'home', component: Home },
  { path: '/login', name: 'login', component: Login },
  { path: '/plans', name: 'plans', component: Plans },
  { path: '/simulations', name: 'simulations', component: Simulations },
  { path: '/products', name: 'products', component: Products },
  { path: '/resources', name: 'resources', component: Resources },
  { path: '/aboutus', name: 'aboutus', component: AboutUs },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router