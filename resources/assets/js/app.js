
/**
 * We will load all of this project's JavaScript dependencies 
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import ProductsIndex from './components/products/ProductsIndex.vue';
import ProductsCreate from './components/products/ProductsCreate.vue';
import ProductsEdit from './components/products/ProductsEdit.vue';

/*Here are our routes where the index will redirect us to the products index page*/ 
const routes = [
    {
        path: '/',
        components: {
            productsIndex: ProductsIndex
        }
    },
    {path: '/admin/products/create', component: ProductsCreate, name: 'createProduct'},
    {path: '/admin/products/edit/:id', component: ProductsEdit, name: 'editProduct'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
