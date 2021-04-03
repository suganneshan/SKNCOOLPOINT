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
/*callback fuction */
$(document).ready(function(){
    $("#submit").click(function(){
        var valid
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        
        if(name.length == "")
        {
         Swal.fire({
         icon: 'warning',
         title: 'Please Enter your name',
         showConfirmButton: false,
         timer: 1500,
         showClass: {
            popup: 'animate__animated animate__fadeInDown'
          },
          hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
          }
         })
            $("#name").focus();            
            return false;
        }
        
        else if(email.length == "")
        {
            
            Swal.fire({
                icon: 'warning',
                title: 'Please Enter your Email',
                showConfirmButton: false,
                timer: 1500,
                showClass: {
                   popup: 'animate__animated animate__fadeInDown'
                 },
                 hideClass: {
                   popup: 'animate__animated animate__fadeOutUp'
                 }
       })
            $("#email").focus();
            return false;
        }
        
        else if(phone.length == "")
        {
  
            Swal.fire({
                icon: 'warning',
                title: 'Please Enter your Phone',
                showConfirmButton: false,
                timer: 1500,
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
        else 
        {   
           var con =confrim("Are You Done?");
               if(con == true)
               {
                 alert("Welcome to our website");
                 return true;
               }
               else{
                 return false;
               }
        }
    })
})
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
