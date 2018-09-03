// JavaScript Document
$(document).ready(function() {

    var swiper = new Swiper('.swiper-container', {
      speed: 1300,
      parallax: true,
      loop: true,
	  lazy: true, 
  /*lazy: {
    loadPrevNext: true,
  },*/		
	  clickable: false,
	  autoplay: {
        delay: 5000,
        disableOnInteraction: false,
	  },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
	  /*breakpoints: {
        960: {
          autoHeight: true,
        }
      }*/
    });

});