
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');







window.Vue = require('vue');
window.Swal = require('sweetalert2');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('my-course-component', require('./components/MyCoursesComponent.vue'));
Vue.component('course-form-component', require('./components/FormCourseComponent.vue'));
Vue.component('course-component', require('./components/CourseComponent.vue'));
Vue.component('my-user-component', require('./components/MyUsersComponent.vue'));
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('user-component', require('./components/UserComponent.vue'));
Vue.component('my-teacher-component', require('./components/MyTeacherComponent.vue'));
Vue.component('teacher-form-component', require('./components/FormTeacherComponent.vue'));
Vue.component('teacher-component', require('./components/TeacherComponent.vue'));




// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
