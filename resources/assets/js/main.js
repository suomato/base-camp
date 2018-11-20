import $ from 'jquery';
import Vue from 'vue';
// import Example from './components/Example';

new Vue({
  el: '#app',
  components: {
    // Example,
  },
});

// Hide Page Loader when DOM and images are ready
$(window).on('load', () => $('.pageloader').removeClass('is-active'));

// Toggle mobile menu
$('.navbar-burger').on('click', () => $('.navbar-burger, .navbar-menu').toggleClass('is-active'));
