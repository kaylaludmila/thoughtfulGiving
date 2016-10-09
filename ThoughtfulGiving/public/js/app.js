$(document).ready(function(){
  $('.parallax').parallax();
});

  $(document).ready(function(){
    $('.modal-trigger').leanModal();
      dismissible: true;
      closeIcon: true
      $('.close').closeModal();
  });

$(document).ready(function() {
    $('select').material_select();
  });


///// needed


$(document).ready(function(){
      $('.modal-trigger').leanModal();
      dismissible: true;
      closeIcon: true
      $('.close').closeModal();
      $('.carousel').carousel();
      $(".dropdown-button").dropdown();
      $('select').material_select(function(){
        document.getElementById("search").submit(); 


      }); 
  });

$('.carousel.carousel-slider').carousel({
  full_width: true,
});
autoplay();
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 6000);
}
$(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });

$("select").closest('.input-field').children('.select-wrapper').children("span").html("");

  $(".searchClick").click(function() {
    $('html, body').animate({
        scrollTop: $("#searchBar").offset().top
    }, 900);
});


 
