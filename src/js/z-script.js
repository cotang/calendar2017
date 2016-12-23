jQuery(document).ready(function($){  

  /* Img in the modal window */
  $('.gallery__img').click( function(e){ 
    e.preventDefault(); 
    $('body').css({'overflow-y':'hidden'});   
    $('.overlay').show();
    $('.overlay').find('.overlay__close').css("opacity", "1");
    var thisImg = $(this);
    $(this).find($('img')).clone().appendTo($('.overlay__wrapper'));
    /* Close the modal window */
    $('.overlay__bg, .overlay__close').click( function(e){ 
      e.preventDefault();
      $('body').css({'overflow-y':'auto'}); 
      $(this).closest('.overlay').find('.overlay__close').css({opacity: "0"});
      $(this).closest('.overlay').find($('img')).fadeOut(400).remove();
      $('.overlay').fadeOut(400);
    });
  });


  /* Form in modal window */
  $('.btn:not(.btn--form)').click( function(e){
    e.preventDefault();
    $('body').css({'overflow':'hidden'});   
    $('.overlay').show();
    $('.overlay').find('.form').fadeIn();
    /* Close modal window */
    $('.overlay__bg, .overlay__close').click( function(e){ 
      e.preventDefault();
      $('body').css({'overflow':'auto'});
      $(this).closest('.overlay').find('.form').fadeOut();
      $(this).closest('.overlay').fadeOut(400);
    }); 
  });


});
