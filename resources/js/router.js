import { createRouter, createWebHistory } from 'vue-router';

import MissionVendeur from '@/Pages/Support/MissionVendeur.vue' ;
import Support from '@/Pages/Support.vue' ;


const routes = [
  {
    path: '/support',
    component: Support 
  },
  {
    path: '/page1',
    component: MissionVendeur,   
    name: 'page1'
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router