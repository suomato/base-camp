import $ from 'jquery';

// Hide Page Loader when DOM and images are ready
$(window).on('load', () => $('.pageloader').removeClass('is-active'));

// Toggle mobile menu
$('.navbar-burger').on('click', () =>
  $('.navbar-burger, .navbar-menu').toggleClass('is-active'));

