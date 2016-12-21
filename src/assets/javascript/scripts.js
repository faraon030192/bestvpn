$(document).ready(function(){

	/* ======== OFFCANVAS MOBILE MENU ACTION ======== */
	var $btnOffcanvasOpen = $('.offcanvas__toggle');
	var $sideNav = $('.offcanvas-holder');
	var $sideNavMask = $('#offcanvas-mask');
	var $btnOffcanvasClose = $('.offcanvas__close');
	var $bodyOverflow = $('body');

	$btnOffcanvasOpen.on('click', function(event) {
		event.preventDefault();
		$sideNav.addClass('open');
		$sideNavMask.addClass('open');
		$bodyOverflow.addClass('offcanvas-open');
		$asidePanel.removeClass('aside-open');
		$asideBtnToggle.removeClass('open');
	});

	$sideNavMask.on('click', function() {
		$sideNav.removeClass('open');
		$sideNavMask.removeClass('open');
		$bodyOverflow.removeClass('offcanvas-open');
	});

	$btnOffcanvasClose.on('click', function(event) {
		event.preventDefault();
		$sideNav.removeClass('open');
		$sideNavMask.removeClass('open');
		$bodyOverflow.removeClass('offcanvas-open');
	});
	
	if ($(window).width() <= 767) {
     $('.offcanvas-holder').appendTo('body');
  } else {
		$('.offcanvas-holder').appendTo('.offcanvas-wrapper');
	}
	
});

$(window).resize(function() {
  if ($(window).width() <= 767) {
     $('.offcanvas-holder').appendTo('body');
  } else {
		$('.offcanvas-holder').appendTo('.offcanvas-wrapper');
	}
});

$(window).scroll(function () {
	/* ======== NAVBAR STICKY ACTION ======== */
  if ( $(this).scrollTop() > 30 && !$('.navbar-holder').hasClass('navbar-holder--sticky') ) {
    $('.navbar-holder').addClass('navbar-holder--sticky');
	} else if ( $(this).scrollTop() <= 30 ) {
    $('.navbar-holder').removeClass('navbar-holder--sticky');
  }
});
