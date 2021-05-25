<?php include 'connection.php';?> 
<!DOCTYPE html>
<html>
	<head>	
  <link rel = "icon"  href =  "logo/tabimages.png" type = "image/x-icon">  
    <title>CONTACT PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keywords" content="SKN,skn,skn cool point,Ac Services,cool point,SKN cool point,ac service,AC Service,erode ac service,Air cooler service">
    
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>  
    <link rel="stylesheet" href="contactstyle.css">
    <!--box icon --> 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--icon end--> 
     <!-- star rating -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- animated on scroll -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Back to Top-->
    <button onclick="topFunction()" class="btn-top" id="myBtn" title="Go to top"><i class='bx bxs-chevron-up' ></i></button>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop >1100 || document.documentElement.scrollTop > 1100) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
      <!-- back to Top -->

         <!--style Start-->
    <style>
      #navbar-mainbg 
      { 
        background:#689dcf;
      }
      </style>
       <!--style End-->
    </head>
    <body background="#f7f7f7">
        <!--Start of navbar-->
    
      <nav class="navbar navbar-expand-lg p-0" id="navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php"><img src="images/skn-logo11.png" alt="logo" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <i class='bx bx-menu bx-md' style="font-size: 40px; color:black"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
              <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Aboutus.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--End of navbar -->
        <header>
            <img src="images/contactus_1.png" alt="contact Image" title="Contact Images" data-aos="zoom-in-up"  data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
        </header>

      <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between text-left">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

 <!-- floaticon -->
 <section class="float">
  <div class="action" onclick="actionToggle();"> 
    <span><i class="fas fa-comments"></i></span>
    <ul>
      <a href="registrationform.php">  <li><img src="logo/booking-com-(1).png" alt="">Book your service</li></a>
      <a href="https://api.whatsapp.com/send?phone=912222&text=Hi,%20SKN%20Cool%20Point%20need%20more%20information%20about%20skncoolpoint.%20please%20contact%20me."><li><img src="logo/whatsapp.png" alt="">Chat With whatsapp</li></a>
      <a role="button"  data-toggle="modal" data-target="#loginModal"><li><img src="logo/enquiry1.png" alt=""> Enquiry </li></a>   
    </ul>
  </div>
</section>
<!-- floaticon -->
      <!-- map -->
      <section class="map">
        <div class="container-fluid"  data-aos="zoom-in-up"  data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
          <h4 style="text-align:center;font-size: 40px;color:var(--color);;font-weight:500;">OUR LOCATION</h4>
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px";>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.8864524518635!2d77.72908311480593!3d11.343003591938535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f88bcfabfd7%3A0x4cc0a29f361f67f1!2sSKN%20COOL%20POINT!5e0!3m2!1sen!2sin!4v1619513854681!5m2!1sen!2sin" frameborder="0"
              style="border:0;" height="400" width="100%"></iframe>
          </div>
      </section>
      <!-- map -->
      <!-- contact info -->
        <aside class="body">
        <section class="contact_wrapper"  data-aos="zoom-in-up"  data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
         
          <div class="contact_info">
            <h3 class="title">
              contact info
            </h3>
            <div class="icons_text">
              <div class="icon">
                <span>
                  <i class='bx bx-map'></i>
                </span>
                <div class="text">
                  251,Mahadava Krishna Street,
                  Dr.KalyanaSundaram Clinic, 
                  Erode-638001. 
                  <p><a href="https://goo.gl/maps/F9Ber7RQ4ZveeRj69" target="_blank" style="color: rgba(255, 255, 255, 0.932);font-weight:800; text-decoration: none; font-size:20px;">View Map</a></p>
                </div>
              </div>

              <div class="icon">
                <span>
                  <i class='bx bxs-envelope' ></i>
                </span>
                <div class="text">
                  skn.syedanish@gmail.com
                </div>
              </div>

              <div class="icon">
                <span>
                  <i class='bx bx-phone-call' ></i>
                </span>
                <div class="text">
                  +91 9842712222
                </div>
              </div>

            </div>
            <div class="social_wrap">
              <a href="#">
                <span>
                  <i class='bx bxl-facebook' ></i>
                </span>
              </a>
              <a href="#">
                <span>
                  <i class='bx bxl-whatsapp' ></i>
                </span>
              </a>
              <a href="#">
                <span>
                  <i class='bx bxl-google'></i>
                </span>
              </a>
              <a href="#">
                <span>
                  <i class='bx bxl-instagram'></i>
                </span>
              </a>
            </div>
          
          </div>


          <div class="contact_msg">
            <h3 class="title">
              Send a FeedBack
            </h3>
            <form  action="connect_contact.php"  method="POST">
            <div class="form_fild">
              <div class="input_group w_50">
                <input type="text" name="C_name" id="C_name" class="input" title="Please Enter The First Name"  maxlength="100" required autocomplete="OFF">
                <label for="" class="placeholder">Name  <span style="color: red; padding-left: 2px;">*</span></label>
              </div>
                  
                  <div class="input_group w_50">
                    <input type="text" class="input" name="C_location" id="C_location"  title="Please Enter Your District" maxlength="30"  required autocomplete="OFF" >
                    <label for="" class="placeholder">Address<span style="color: red; padding-left: 2px;">*</span></label>
                  </div>
              
              <div class="input_group w_100">
                <input type="email" name="C_email" id="C_email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Enter The Valid Email Address" class="input" required autocomplete="OFF">
                <label for="" class="placeholder">Email  <span style="color: red;  padding-left: 2px;">*</span></label>
              </div>

              <div class="input_group w_100">
                <input type="tel" name="C_phone" id="C_phone" class="input"  pattern="[0-9]{10}" title="Enter only 10 numbers" maxlength="10" required autocomplete="OFF">
                <label for="" class="placeholder">Phone Number  <span style="color: red;  padding-left: 2px;">*</span></label>
              </div>

              <div class="input_group w_100">
                <textarea rows="9" cols="40"  name="C_message" id="C_message" class="input input_textarea" title="Please Enter Your Message"  required autocomplete="OFF"></textarea>
                <label class="placeholder textarea">Write Your Message Here...  <span style="color: red;  padding-left: 2px;">*</span></label>
               
                <div class="input_group w_100">
                  <label style="font-size: 20px; color:black;padding-top: 10px; text-align: left;">Rating For our Service</label>
                <div class="rateyo" id='rateYo'   id= "rating">
                  </div>
                  <input type="hidden" name="C_rating">
                </div>
                <div class="input_group">
                  <input type="submit" name="submit_reg" id="submit_reg" class="btn" value="Send"> 
                </div>
                 
              </div>
            
            </div>
          </form>
          </div>
        </section>
      </aside>

    <section class="modaled">
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h1 style="color: white; font-weight: 400;font-size: 40px;">Enquiry Form</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="logo/crossicon (1).png" alt="crossicon"></span>
            </button>
          </div>
          <div class="modal-body">
            <form  action="connect_enquiry.php"  method="POST">
              <div class="form_fild">
                <div class="input_group w_100">
                  <input type="text" name="e_name" id="e_name" class="input" title="Please Enter The First Name"  maxlength="100" required autocomplete="OFF">
                  <label for="" class="placeholder">Name  <span style="color: red; padding-left: 2px;">*</span></label>
                </div>
                    
                    <div class="input_group w_100">
                      <input type="text" class="input" name="e_location" id="e_location"  title="Please Enter Your District" maxlength="30"  required autocomplete="OFF" >
                      <label for="" class="placeholder">Address<span style="color: red; padding-left: 2px;">*</span></label>
                    </div>
                
                <div class="input_group w_100">
                  <input type="email" name="e_email" id="e_email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Enter The Valid Email Address" class="input" required autocomplete="OFF">
                  <label for="" class="placeholder">Email  <span style="color: red;  padding-left: 2px;">*</span></label>
                </div>
  
                <div class="input_group w_100">
                  <input type="tel" name="e_phone" id="e_phone" class="input"  pattern="[0-9]{10}" title="Enter only 10 numbers" maxlength="10" required autocomplete="OFF">
                  <label for="" class="placeholder">Phone Number  <span style="color: red;  padding-left: 2px;">*</span></label>
                </div>
  
                <div class="input_group w_100">
                  <textarea rows="9" cols="40"  name="e_message" id="e_message" class="input input_textarea" title="Please Enter Your Message"  required autocomplete="OFF"></textarea>
                  <label class="placeholder textarea">post your queiries  <span style="color: red;  padding-left: 2px;">*</span></label>
                </div>
                  <div class="input_group">
                    <input type="submit" name="submit_enq" id="submit_enq" class="btn" value="Send">
                   </div>
                   
                </div>
              
              </div>
            </form>
        </div>
      </div>
    </div>

      </section>

      <section class="container-fulid cont-footer">
        <div>
          <img src="images/wave-3.svg" alt="" srcset="">
        </div>
      </div>
      <footer class="footer">
      
        <div class="container-fluid">
          <div class="row">
            <div class="footer-col">
              <h4>Quick links</h4>
              <ul>
                <li><a href="index.php"><span><i class="fas fa-chevron-right"></i></span> Home</a></li>
                <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> our services</a></li>
                <li><a href="Aboutus.html"><span><i class="fas fa-chevron-right"></i></span> About us</a></li>
                <li><a href="gallery.html"><span><i class="fas fa-chevron-right"></i></span> Gallery</a></li>
                <li><a href="contact.php"><span><i class="fas fa-chevron-right"></i></span> Contact</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Our Services</h4>
            <ul>
              <li><a href="acservice.html"><span><i class="fas fa-chevron-right"></i></span> Ac Installation</a></li>
              <li><a href="acservice.html"><span><i class="fas fa-chevron-right"></i></span> Ac Dismantling</a></li>
              <li><a href="acservice.html"><span><i class="fas fa-chevron-right"></i></span> Gas Filling</a></li>
              <li><a href="acservice.html"><span><i class="fas fa-chevron-right"></i></span> Ac Repair</a></li>
              <li><a href="acservice.html"><span><i class="fas fa-chevron-right"></i></span> Ac Maintenance</a></li>
              <li><a href="refrigeratorservice.html"><span><i class="fas fa-chevron-right"></i></span> Refrigerator Services</a></li>
            </ul>
            </div>
            
            <div class="footer-col">
              <h4>Hours Of Operation</h4>
              <ul>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Monday 9:30 am - 8:30pm</a></li>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Tuesday 9:30 am - 8:30 pm</a></li>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Wednesday 9:30 am - 8:30 pm</a></li>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Thursday 9:30 am - 8:30 pm</a></li>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Friday 9:30 am - 8:30 pm</a></li>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Saturday 9:30 am - 8:30 pm</a></li>
                <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>Sunday Closed</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social_wrap">
                <a href="https://www.facebook.com/" target="_blank">
                  <span>
                    <i class='bx bxl-facebook' ></i>
                  </span>
                </a>
                <a href="https://api.whatsapp.com/send?phone=912222&text=Hi,%20SKN%20Cool%20Point%20need%20more%20information%20about%20skncoolpoint.%20please%20contact%20me." target="_blank">
                  <span>
                    <i class='bx bxl-whatsapp' ></i>
                  </span>
                </a>
                <a href="mailto:skn.syedanish@gmail.com" target="_blank">
                  <span>
                    <i class='bx bxl-google'></i>
                  </span>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                  <span>
                    <i class='bx bxl-instagram'></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <p style="text-align: center; text-decoration:none;color:#fdfeff;font-size:20px;">&copy; <script language="javascript" type="text/javascript">
            var today = new Date()
            var year = today.getFullYear()
            document.write(year)
             </script> SKN COOL POINTS ALL RIGHTS RESERVED. Designed and developed by <a href="#" target="_blank" style="text-align: center; text-decoration:none;color:#E0E1E2;font-size:20px;">Students</a></p>
        </div>
     </footer>
  </section>
        <!-- contact info END -->
        <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
        <!-- Popper JS -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
        <!-- Bootstrap JS -->
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

        <!-- animated on scroll -->
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         
         <!-- star rating -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
         
         <!--sweet Alter-->
         <script src="sweetalert2.all.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
         
          <!-- Bootstrap js-->
         <script src="js/side.js"></script>
          <script src="js/contact_form.js"></script>
          <script src="js/enquir.js"></script>
                    <!-- floaticon -->
                   <script type="text/javascript">
                    function actionToggle(){
                      var action = document.querySelector('.action');
                      action.classList.toggle('active')
                    }
                </script>
                <!-- floaticon -->


                <!-- star rating -->
                <script type="text/javascript">
                $(function () {
                        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                        var rating = data.rating;
                        $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                        $(this).parent().find('.result').text('rating :'+ rating);
                        $(this).parent().find('input[name=C_rating]').val(rating); //add rating value to input field
                    });
                });
                </script>
                <!-- styling star -->
                <script type="text/javascript">
                $("#rateYo").rateYo({
                  rating:0,
                  starWidth:'50px',
                  numStars:5,
                  minValue:1,
                  maxValue:5,
                  normalFill:'white',
                  ratedFill:'#021b33'
                });
                </script>
                <!-- star rating -->
                
                <?php
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
              ?>
              <script>
                Swal.fire({
                position: 'center',
                icon: "<?php echo $_SESSION["status_code"];?>",
                title: "<?php echo $_SESSION["status"];?>",
                showConfirmButton:false,
                padding: '3em',
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              });
                </script>
                <?php
                unset($_SESSION['status']);
            }
            ?> 
  </body> 
 </html>    
            