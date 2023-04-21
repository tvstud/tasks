import './bootstrap';
import Vue from 'vue';
import TaskList from './vue/TaskList.vue';
// import the component TaskManager from the file TaskManager.vue
import TaskManager from './vue/TaskManager.vue';
Vue.component('task-list', TaskList);
// register the component TaskManager
Vue.component('task-manager', TaskManager);

const app = new Vue({
  el: '#app',
});