var $header_top = $('.header-top');
var $nav = $('nav');

$header_top.find('a').on('click', function () {
  $(this).parent().toggleClass('open-menu');
});

$('#fullpage').fullpage({
  sectionSelector: '.vertical-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: false,
  anchors: ['firstSection', 'secondSection', 'thirdSection'],
  menu: '#menu',


});