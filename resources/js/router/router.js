import { Home } from "postcss";
import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/layuot/Home.vue";

/*import Admin from '../views/Admin.vue'
import Login from '../views/Login.vue'
import Mechanic from '../views/Mechanic.vue'
import Receivers from '../views/Receivers.vue'
import Home from '../views/Home.vue'

import NewUser from '../views/admin/NewUser.vue'
import Order from '../views/admin/Order.vue'
import Users from '../views/admin/Users.vue'
import WorkShift from '../views//admin/WorkShift.vue'*/


const routes =[
    {
        path:"/",
        name: 'Home',
        component: Home
    },
    /*{
        path: '/admin',
        name: 'admin',
        component: Admin
      },
      {
        path: '/login',
        name: 'login',
        component: Login
      },
      {
        path: '/mechanic',
        name: 'mechanic',
        component: Mechanic
      },
      {
        path: '/receivers',
        name: 'receivers',
        component: Receivers
      },
      {
        path: '/home',
        name: 'home',
        component: Home
      },


      //Для администратора
      {
        path: '/admin/new-user',
        name: 'new-user',
        component: NewUser
      },
      {
        path: '/admin/order',
        name: 'order',
        component: Order
      },
      {
        path: '/admin/users',
        name: 'users',
        component: Users
      },
      {
        path: '/admin/work-shift',
        name: 'work-shift',
        component: WorkShift
      }*/
]

const router = createRouter({
    routes,
    history: createWebHistory(process.eny.BASE_URL)
})

export default router
