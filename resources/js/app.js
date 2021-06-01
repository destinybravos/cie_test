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
import { faBell, faBuilding, faCalendarAlt, faCheckCircle, faCommentAlt, faEnvelope, faImage, faImages, faTimesCircle, faUser} from '@fortawesome/free-regular-svg-icons';
import { faBookReader, faChalkboardTeacher, faCircleNotch, faExternalLinkAlt, faInfoCircle, faKey, faLink, 
    faMapPin, faPhoneAlt, faSortNumericUpAlt, faTimes, faUserAlt, faUsersCog, faUserPlus, faHome, faBars, 
    faUserGraduate, faUniversity, faSchool, faUsers, faBook, faGraduationCap, faSatelliteDish, faBriefcase,
     faTools, faPlus, faSignInAlt, faTasks, faChevronDown, faMoneyBill, faLock, faEye, faEyeSlash, faArrowLeft,
      faBullhorn, faStoreAlt, faSeedling, faPlusCircle, faCog, faUserFriends } from '@fortawesome/free-solid-svg-icons';
import { faAccusoft, faFacebookF, faInstagram, faTwitter, faWhatsapp } from '@fortawesome/free-brands-svg-icons';

library.add(faUser,faPhoneAlt, faEnvelope, faUserAlt, faSortNumericUpAlt, faUserPlus, faKey, faTimesCircle, faCheckCircle, faTimes, 
    faCircleNotch, faFacebookF, faTwitter, faInstagram, faWhatsapp, faLink, faExternalLinkAlt, faInfoCircle,
    faAccusoft, faUsersCog, faChalkboardTeacher, faBookReader, faUserPlus, faMapPin, faHome, faBars, 
    faUserGraduate,faUniversity, faSchool, faUsers, faBook, faGraduationCap, faSatelliteDish, faBriefcase,
    faTools,faPlus, faSignInAlt, faTasks, faBuilding, faChevronDown, faMoneyBill, faLock, faEye, faEyeSlash,
    faArrowLeft, faBullhorn,faStoreAlt,faSeedling, faPlusCircle, faCommentAlt, faBell, faCog, faUserFriends, faImages,
    faCalendarAlt, faImage,faUsers);

Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.config.productionTip = false;


// Animate on Scroll
import AOS from 'aos';
import 'aos/dist/aos.css';


const app = document.getElementById('app');

new Vue({
    created () {
        AOS.init();
    },
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
