import './bootstrap';

import { createApp, h } from 'vue'
import { createPinia } from 'pinia'
import { createInertiaApp } from '@inertiajs/vue3'
import 'flowbite';
import Layout from './Pages/Layout/Layout.vue';
import '../../node_modules/flowbite-vue/dist/index.css'
import '../../node_modules/flowbite-datepicker'

const pinia = createPinia();

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
    let page = pages[`./Pages/${name}.vue`];
    page.default.layout = page.default.layout || Layout;
    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(pinia)
      .mount(el)
  },
})