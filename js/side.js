/*nav bar function*/
function test(){
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top":itemPosNewAnimTop.top + "px",
        "left":itemPosNewAnimLeft.left + "px",
        "height":activeWidthNewAnimHeight + "px",
        "width":activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click","li",function(e){
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top":itemPosNewAnimTop.top + "px",
            "left":itemPosNewAnimLeft.left + "px",
            "height":activeWidthNewAnimHeight + "px",
            "width":activeWidthNewAnimWidth + "px"
        });
    });
}
$(document).ready(function(){
    setTimeout(function() { test(); });
});
$(window).on('resize',function(){
    setTimeout(function(){ test(); },500);
});
$(".navbar-toggler").click(function(){
    setTimeout(function(){ test(); });
});
/*navbar*/


/*callback fuction */
$(document).ready(function(){
    $("#submit").click(function(){
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        
        if(name.length == "")
        {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please  Fill Your Name',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#name").focus();            
            return false;
        }
        
        else if(email.length == "")
        {
            
              Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please Fill your Email',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
            $("#email").focus();
            return false;
        }
        
        else if(phone.length == "")
        {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Please fill your Phone Number',
                showConfirmButton:false,
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              })
            $("#phone").focus();
            return false;
        }
    })
})
/* call back form*/
/** gallery */
$(document).ready(function () {
  $(".list").click(function () {

      let value = $(this).attr("data-filter");

      if (value == "all") {
          $(".items").show(1000);
      }
      else {
          $(".items").not("." + value).hide(1000);
          $(".items").filter("." + value).show(1000);
      }

      $(".list").removeClass("active");
      $(this).addClass("active");
  });


  $('.items-container').magnificPopup({
      delegate: 'a', 
      type: 'image',
      gallery: {
          enabled: true, 

          preload: [0, 2],
          navigateByImgClick: true,

          arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',

          tPrev: 'Previous (Left arrow key)',
          tNext: 'Next (Right arrow key)',
          tCounter: '<span class="mfp-counter">%curr% of %total%</span>' 
      },

      mainClass: 'mfp-with-zoom', 
      zoom: {
          enabled: true, 

          duration: 300, 
          easing: 'ease-in-out', 
          opener: function (openerElement) {
              return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
      }
  });
});
/**gallery */

          
AOS.init({ 
  once: 'true'
  });
  /* Animated On Scroll */

/** owlCarousel */
var $owl = $("#carousel1");
$owl.children().each(function( index ){
  $(this).attr('data-position',index);
});
$("#carousel1").owlCarousel({
  loop:true,
  center:true,
  margin:0,
  responsiveClass:true,
  nav:false,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  responsive:{
    0:{
      items:1
    },
    680:{
      item:2
    },
    1000:{
      items:3
    }
  }
});
$(document).on('click','owl-item>div',function(){
  var $speed = 1000;
  $owl.tigger('to.owl.caruosel',[$(this).data(position),$speed]);
});
/**OWLcaruosel */

  var swiper = new Swiper('.swiper-container', {
    autoplay: {
    delay: 2500,
    disableOnInteraction: true,
    updateOnWindowResize:true,
  },
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    loop:true,
  });
/**Swiper Slider */


/**Reader More */
  var x=0;
  function read(){
    if(!x){
      document.getElementById("more").style.display = "inline";
      document.getElementById("dot").style.display = "none";
      document.getElementById("read").innerHTML = "Read Less";
      x=1;
    }
    else{
      document.getElementById("more").style.display = "none";
      document.getElementById("dot").style.display = "inline";
      document.getElementById("read").innerHTML = "Read More";
      x=0;
    }
  }
/**Read More */


// !(function($) {
//     // Preloader
//     $(window).on('load', function() {
//       if ($('#preloader').length) {
//         $('#preloader').delay(100).fadeOut('slow', function() {
//           $(this).remove();
//         });
//       }
//     });
// })(jQuery);
