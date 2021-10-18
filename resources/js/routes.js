import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './router/Home/Page.vue';
import About from './router/About/Page.vue';
import App from './router/App/Page.vue';

const routes = [
	{
		path: '/',
		component: Home,
		name: 'Home'
	},
	{
		path: '/about',
		component: About,
		name: 'About'
	},
	{
		path: '/app',
		component: App,
		name: 'App'
	},
]

export default routes;