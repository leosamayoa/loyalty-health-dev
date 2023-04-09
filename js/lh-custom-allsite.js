(function($){

  /* Custom Loyalty Health all pages */
  // popup btn 
  if($('#popmake-85').length > 0) {
    $('#popmake-85 input[type="submit"]').append('<span></span>').addClass('btn-animate');
  }



  // dark mode toggle
  setTimeout(function() {
    if($('body.wp-night-mode-on').length > 0) {
      $('#btn-dark-mode-light').css('pointer-events', 'auto');

      console.log('D mode on')
    }
  }, 50)

  $('.wp-night-mode').on('click', function() {
    if($('body.wp-night-mode-on').length > 0) {
      $('#btn-dark-mode-light').css('pointer-events', 'auto');
    } else {
      $('#btn-dark-mode-light').css('pointer-events', 'none');
    }

  });

  // END dark mode toggle

  // CUSTOM Cursor
  mql = window.matchMedia('(min-width: 768px)');

  initCustomCursor();

  $(window).resize(initCustomCursor)

  function initCustomCursor() {
    if(mql.matches) {
   
      var customCursor = document.getElementById('lh-cursor');
    
      document.addEventListener('mousemove', function(e) {
          customCursor.setAttribute("style", "top: " + (e.pageY - 10)  + "px; left: " + (e.pageX - 10) + "px;");
      })
    
      $('a, .wp-night-mode').mouseenter(function() {
        $('#lh-cursor').addClass('active')
      })
      $('a, .wp-night-mode, input[type="submit"]').mouseleave(function() {
        $('#lh-cursor').removeClass('active')
      })
    
      document.addEventListener('mouseup', function() {
        $('#lh-cursor').addClass('click')
        setTimeout(function() {
          $('#lh-cursor').removeClass('click')
        }, 400)
      })
    
      window.addEventListener("wheel", function() {
        customCursor.classList.add('hide')
        setTimeout(function(){
          customCursor.classList.remove('hide')
        }, 100)
      });
      }
  }
  
  // END custom cursor

  setTimeout(function() {
    if($('.iwm_map_canvas circle').length > 0) {
      $('.iwm_map_canvas circle').on('mouseenter', function() {
        $(this).attr('fill','#000')
      })
      $('.iwm_map_canvas circle').on('mouseleave', function() {
        $(this).attr('fill','#fcc362')
      })
    }
  }, 1000)

$(document).ready(function() {
  $('html, body').hide();

  if (window.location.hash) {
      setTimeout(function() {
          $('html, body').scrollTop(0).show();
          $('html, body').animate({
              scrollTop: $(window.location.hash).offset().top
              }, 1000)
      }, 0);
  }
  else {
      $('html, body').show();
  }
});


/**
 ** END all pages 
**/



})(jQuery);