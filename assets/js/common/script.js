$(function () {
  // MODAL
  $('.modal_link01').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link02').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link03').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link04').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link05').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link06').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link07').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link08').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link09').click(function (event) {
    event.preventDefault();
  });
  $('.modal_link10').click(function (event) {
    event.preventDefault();
  });

  $('.modal_box01').hide();
  $('.modal_box02').hide();
  $('.modal_box03').hide();
  $('.modal_box04').hide();
  $('.modal_box05').hide();
  $('.modal_box06').hide();
  $('.modal_box07').hide();
  $('.modal_box08').hide();
  $('.modal_box09').hide();
  $('.modal_box10').hide();

  $('.modal_link01').click(function () {
    $('.modal_box01').fadeIn('normal', function() {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link02').click(function () {
    $('.modal_box02').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link03').click(function () {
    $('.modal_box03').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link04').click(function () {
    $('.modal_box04').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link05').click(function () {
    $('.modal_box05').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link06').click(function () {
    $('.modal_box06').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link07').click(function () {
    $('.modal_box07').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link08').click(function () {
    $('.modal_box08').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link09').click(function () {
    $('.modal_box09').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });
  $('.modal_link10').click(function () {
    $('.modal_box10').fadeIn('normal', function () {
      $('img[usemap]').rwdImageMaps();
    });
  });

  $('.m-modal-bg,.m-modal-close').click(function () {
    $('.m-modal-area').fadeOut();
    return false;
  });


  return false;
});