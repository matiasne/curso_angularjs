import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/components/Login'
import Inicio from '@/components/Inicio'
import Alta from '@/components/Alta'
import Editar from '@/components/Editar'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '*',
      redirect:'/'
    },{
      path:'/',
      redirect:'/login'
    },{
      path:'/login',
      name:'/Login',
      component: Login
    },{
      path: '/inicio',
      name: '/Inicio',
      component: Inicio
    },{
      path: '/alta',
      name: '/Alta',
      component: Alta
    },{
      path: '/editar/:id',
      name: '/Editar',
      component: Editar
    }

  ]
})
