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
// $(document).ready(function(){
//     setTimeout(function() { test(); });
// });
// $(window).on('resize',function(){
//     setTimeout(function(){ test(); },500);
// });
// $(".navbar-toggler").click(function(){
//     setTimeout(function(){ test(); });
// });

// /*callback fuction */
// $(document).ready(function(){
//     $("#submit").click(function(){
//         var name = $("#name").val();
//         var email = $("#email").val();
//         var phone = $("#phone").val();
        
//         if(name.length == "")
//         {
//             Swal.fire({
//                 position: 'center',
//                 icon: 'warning',
//                 title: 'Please  Fill Your Name',
//                 showConfirmButton:false,
//                 timer: 2500,
//                 showClass: {
//                     popup: 'animate__animated animate__fadeInDown'
//                   },
//                   hideClass: {
//                     popup: 'animate__animated animate__fadeOutUp'
//                   }
//               });
//             $("#p1").text("Please Enter Your Name")
//             $("#name").focus();            
//             return false;
//         }
        
//         else if(email.length == "")
//         {
            
//               Swal.fire({
//                 position: 'center',
//                 icon: 'warning',
//                 title: 'Please Fill your Email',
//                 showConfirmButton:false,
//                 timer: 2500,
//                 showClass: {
//                     popup: 'animate__animated animate__fadeInDown'
//                   },
//                   hideClass: {
//                     popup: 'animate__animated animate__fadeOutUp'
//                   }
//               });
//              $("#p2").text("enter your  Email Id")
//             $("#email").focus();
//             return false;
//         }
        
//         else if(phone.length == "")
//         {
//             Swal.fire({
//                 position: 'center',
//                 icon: 'warning',
//                 title: 'Please fill your Phone Number',
//                 showConfirmButton:false,
//                 timer: 2500,
//                 showClass: {
//                     popup: 'animate__animated animate__fadeInDown'
//                   },
//                   hideClass: {
//                     popup: 'animate__animated animate__fadeOutUp'
//                   }
//               })
//             $("#p3").text("Enter your Phone Number")
//             $("#phone").focus();
//             return false;
//         }
//         else 
//         {   
//             Swal.fire({
//                 title: 'Do you want to save the changes?',
//                 showDenyButton: true,
//                 showCancelButton: true,
//                 confirmButtonText: `Call Back`,
//                 denyButtonText: `Don't Call Back`,
//               }).then((result) => {
//                 /* Read more about isConfirmed, isDenied below */
//                 if (result.isConfirmed) {
//                   Swal.fire('Call within Today!', '', 'success')

//                 } else if (result.isDenied) {
//                   Swal.fire(' Your callBack is  canceled', '', 'info')
//                 }
//               })
//               return false;
//         }
//     })
// })
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
