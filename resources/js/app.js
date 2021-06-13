

require('./bootstrap');


window.Vue = require('vue');

import RegistroComponent from './components/RegistroComponent'
import ExampleComponent from './components/RegistroComponent'

/*
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
*/
Vue.component('registro-component', require('./components/RegistroComponent.vue').default);


const app = new Vue({
    el: '#app',
    components: { RegistroComponent },
    template: '<registro-component/>'
});
