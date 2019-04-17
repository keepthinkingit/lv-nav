/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import App from './components/app.vue'
// import VueRouter from 'vue-router';
// import Routers from './router.js';
import iView from 'iview';
import 'iview/dist/styles/iview.css';
// 导入vue
Vue.use(iView);
// Vue.use(VueRouter);
// 路由配置
// const RouterConfig = {
//     routes: [
//         // ExampleComponent laravel默认的示例组件
//         { path: '/', component: require('./components/ExampleComponent.vue') },
//         { path: '/bsh', component: require('./components/bsh.vue') },
//     ]};
// const router = new VueRouter(RouterConfig);
//使用 vue-moment 处理日期时间
Vue.use(require('vue-moment'));

// Vue.component('flash', require('./components/Flash.vue').default);  //注册 组件
Vue.component('welcome', require('./components/Welcome.vue').default);
Vue.component('tab', require('./components/Tab.vue'));
Vue.component('timestamp', require('./components/Timestamp.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
