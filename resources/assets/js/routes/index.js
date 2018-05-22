import Vue from 'vue';
import VeeValidate from 'vee-validate';
import VueRouter from 'vue-router';
import Vuetify from 'vuetify'
import VueI18n from 'vue-i18n'




Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(Vuetify);
Vue.use(VueI18n);

//routes
const routes = [
    //{ path: '/example1', component: require('../components/ExampleComponent.vue') },
   { path: '/', component: require('../components/newshome.vue')},
   { path: '/changepassword', component: require('../changepassword/changepassword.vue')},
   { path: '/contact', component: require('../components/newscontact.vue')},
   { path: '/about', component: require('../components/about.vue')},
   { path:'/calender', component:require('../CalendarComponents/Calendarmain.vue')},
   { path: '/topnewspost', component: require('../Admin/Topnewsmain.vue')},
   { path: '/topnewsedit', component: require('../Admin/topnewsedit.vue')},
   { path: '/topnewsretrive', component: require('../UserNews/TopNewsUsermain.vue')},
   { path: '/calendarip', component: require('../CalendarComponents/CalendarOperation.vue')},
   { path: '/weather', component: require('../Weather/weathermain.vue')},
   { path: '/vacancy', component: require('../Vacancy/home.vue')},
   { path: '/career', component: require('../Vacancy/career.vue')}, 
   { path: '/bank', component: require('../Vacancy/bankcategory.vue')},  
   { path: '/postjob', component: require('../Vacancy/vacancypost.vue') } ,
   { path: '/imagetry', component: require('../Vacancy/imagetry.vue') } ,
   { path: '/googlemap', component: require('../Vacancy/googlemap.vue') } 
];

export default new VueRouter({
    routes,
   
});