import Vue from 'vue'
import App from './App.vue'
import VueGoodTable from 'vue-good-table'
import 'vue-good-table/dist/vue-good-table.css'

Vue.use(VueGoodTable)
Vue.config.productionTip = false

new Vue({
  render: function (h) { return h(App) },
}).$mount('#app')
