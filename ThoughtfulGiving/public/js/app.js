$(document).ready(function(){
  $('.parallax').parallax();
});

  $(document).ready(function(){
    $('.modal-trigger').leanModal();
      dismissible: true;
      closeIcon: true
      $('.close').closeModal();
  });

  $(".learnMore").click(function() {
    $('html, body').animate({
        scrollTop: $("#aboutSwap").offset().top
    }, 900);
});

  $("#brandClick").click(function() {
    $('html, body').animate({
        scrollTop: $("#page-footer").offset().top
    }, 900);
});

$(document).ready(function() {
    $('select').material_select();
  });

$(".torequests").click(function() {
    $('html, body').animate({
        scrollTop: $("#swapped").offset().top
    }, 900);
});


///// needed


$(document).ready(function(){
    $('.modal-trigger').leanModal();
      dismissible: true;
      closeIcon: true
      $('.close').closeModal();
      $('.carousel').carousel();
      $(".dropdown-button").dropdown();

      $('input.autocomplete').autocomplete({
        data: {
          "Clothing": null,
          "Food": null,
          "Pet Supplies": null,
          }
    });
  });

$('.carousel.carousel-slider').carousel({
  full_width: true,
  // height: 100,
});
autoplay();
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 6000);
}
$(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });


 