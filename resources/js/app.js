require('./bootstrap');

require('moment');

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);

// Font awesome integration
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faCheckCircle, faEnvelope, faTimesCircle, faUser } from '@fortawesome/free-regular-svg-icons';
import { faCircleNotch, faKey, faPhoneAlt, faSortNumericUpAlt, faTimes, faUserAlt, faUserPlus } from '@fortawesome/free-solid-svg-icons';

library.add(faUser,faPhoneAlt, faEnvelope, faUserAlt, faSortNumericUpAlt, faUserPlus, faKey, faTimesCircle, faCheckCircle, faTimes, faCircleNotch);

Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.config.productionTip = false;

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
