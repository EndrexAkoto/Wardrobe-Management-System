import { createRouter, createWebHistory } from 'vue-router'
import App from '../App.vue'  // Import App.vue
import Login from '../views/Login.vue'
import Register from '../views/Register.vue'

const routes = [
  { path: '/', name: 'Landing', component: App }, // App.vue as the landing page
  { path: '/login', name: 'Login', component: Login },
  { path: '/register', name: 'Register', component: Register },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
