import Vue from 'vue'
import Router from 'vue-router'
import iniciarSesion from '@/components/iniciarSesion'
import registro from '@/components/registro'
import inicio from '@/components/inicio'
import categorias from '@/components/categorias'
import alta from '@/components/alta'
import editar from '@/components/editar'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'iniciarSesion',
      component: iniciarSesion
    },{
      path: '/registro',
      name: 'registro',
      component: registro
    },{
      path: '/inicio',
      name: 'inicio',
      component: inicio
    },{
      path: '/categorias/:cat',
      name: 'categorias',
      component: categorias
    },{
      path: '/alta',
      name: 'alta',
      component: alta
    },{
      path: '/editar/:id',
      name: 'editar',
      component: editar
    }
    
  ]
})
