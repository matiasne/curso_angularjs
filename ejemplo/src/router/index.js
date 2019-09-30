import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import contacto from '@/components/contacto'
import portafolio from '@/components/portafolio'
import ajax from '@/components/ajax'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/contacto/:id/:nombre/:edad',
      name: 'Contacto',
      props: true,
      component: contacto
    },
    {
      path: '/portafolio',
      name: 'Contacto',
      component: portafolio
    },
    {
      path: '/ajax',
      name: 'Ajax',
      component: ajax
    }
  ]
})
