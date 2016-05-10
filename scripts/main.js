$(document).ready(function() {
  $('.mainSlider').unslider({
    autoplay: true,
    delay: 6000,
    nav: true,
    arrows: false
  });

  // Trigger mobileNav
  $('#mobileNav-trigger').click(function () {
    $('.mobileNav').toggleClass('is-active');
    $('.mobileNav-dropdown').removeClass('is-active');
  });

  // Trigger dropdown
  $('.mobileNav-menuItem').click(function () {
    $(this)
      .find('.mobileNav-dropdown')
      .toggleClass('is-active');
  });

  // Close dropdown
  $('.mobileNav-backLink').click(function () {
    $(this)
      .parent()
      .removeClass('is-active');
  });
});