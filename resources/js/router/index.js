// resources/js/router/index.js
import { createRouter, createWebHistory } from 'vue-router'
import Home from '../pages/Home.vue'
import Login from '../pages/Login.vue'
import Register from '../pages/Register.vue'
import Plans from '../pages/Plans.vue'
import Resources from '../pages/Resources.vue'
import AboutUs from '../pages/AboutUs.vue'

const routes = [
  { path: '/', name: 'home', component: Home },
  { path: '/login', name: 'login', component: Login },
  { path: '/register', name: 'register', component: Register },
  { path: '/plans', name: 'plans', component: Plans },
  { path: '/resources', name: 'resources', component: Resources },
  { path: '/aboutus', name: 'aboutus', component: AboutUs },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router