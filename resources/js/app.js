require('./bootstrap');

window.Vue = require('vue');
 
Vue.component('modal-component', require('./components/ModalComponent.vue').default);

new Vue({
    el: '#app',
    data () {
      return {
        isModalVisible: false,
      };
    },
    methods : {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        }
    }
});