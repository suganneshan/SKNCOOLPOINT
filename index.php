<?php include 'connection.php';?>

<!DOCTYPE html>
<html>
    <head>
    <link rel = "icon"  href =  "logo/tabimages.png" type = "image/x-icon"> 
      <title>SKN COOL POINT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keywords" content="SKN,skn,skn cool point,Ac Services,cool point,SKN cool point,ac service,AC Service,erode ac service,Air cooler service">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->

    <!--box icon --> 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--icon end-->
    
    <!--animated css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!--font awesome css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!--css style sheet-->
    <link rel="stylesheet" href="enqiury.css">
    <link rel="stylesheet" href="indexstyle.css">
    
    <!--swiper slide-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!---swiper end-->

    <!-- owl slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- owl end -->

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
     .swiper-pagination-progressbar .swiper-pagination-progressbar-fill{
      background: transparent;
        outline:none;
        box-shadow: none;
}
    </style>
    <!--style End-->
  </head>
    <body>
    
      <!--Start of navbar-->
    
      <nav class="navbar navbar-expand-lg p-0" id="navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#"><img src="images/skn-logo11.png" alt="logo" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <i class='bx bx-menu bx-md' style="font-size: 40px;color: black;"></i>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
              <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Aboutus.html">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="service.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--End of navbar -->

      <main id="main">
      <!--Start Slider-->
    <header class="head">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <div class="item">
                  <img src="img/banner1.jpeg" alt="slider-image">
                  <div class="slide-text">
                      <h1 class="">SKN COOLPOINT</h1>
                      <p>Skn Cool Point in Erode is one of the leading businesses in the AC Repair & Services. Also known for</p>
                      <a href="Aboutus.html"><button>More Information</button></a>
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
            <div class="item">
                <img src="img/brand2.png" alt="slider-image">
                <div class="slide-text">
                    <h1>MULTI-BRAND SERVICES</h1>
                    <p>With a decade of experience in air conditioners, we've grown with the technology.</p>
                    <a href="acservice.html"><button>More Information</button></a>
                </div>
            </div>
        </div>
          <div class="swiper-slide">
              <div class="item">
                  <img src="images/banner_3.jpg" alt="slider-image">
                  <div class="slide-text">
                      <h1>AC INSTALLATION</h1>
                      <p>Our professionals at SKN COOLPOINT are efficient in installing air conditioners of all brands.</p>
                      <a href="acservice.html"><button>More Information</button></a>
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="item">
                  <img src="images/banner_4.jpg" alt="slider-image">
                  <div class="slide-text">
                      <h1>AC DISMANTLING</h1>
                      <p>While dismantling or any other service, safety will not be compromised.</p>
                      <a href="acservice.html"><button>More Information</button></a>
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="item">
                  <img src="images/banner_2.jpg" alt="slider-image">
                  <div class="slide-text">
                      <h1>AC GAS FILLING</h1>
                      <p>The lack of gas refrigerant in the AC (Freon) is the common reason behind AC not cooling properly.</p>
                      <a href="acservice.html"><button>More Information</button></a>
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="item">
                  <img src="img/fridge1.jpg" alt="slider-image">
                  <div class="slide-text">
                      <h1>REFRIGERATOR</h1>
                      <p>Makes you feel at kashmir in your kitchen with our services.</p>
                      <a href="refrigeratorservice.html"><button>More Information</button></a>
                  </div>
              </div>
          </div>
          <div class="swiper-slide">
              <div class="item">
                  <img src="images/authorized_serv.jpg" alt="slider-image">
                  <div class="slide-text">
                      <h1>VOLTAS AUTHORIZED SERVICE</h1>
                      <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis veniam amet magni voluptates totam. Iusto possimus accusantium quia suscipit quas!</p> -->
                      
                  </div>
              </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
    </div>
    
    </header>
    <!--End of slider-->
    <!--section1-->
    <section class="ourservice">
      <div class="container">
        <div class="row gap100">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center"  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
          data-aos-duration="2000">
            <h1>Welcome To SKN Cool Point</h1>
            <p class="text-center"  data-aos="fade-left" data-aos-easing="ease-out-cubic"
            data-aos-duration="2000"><i class="fas fa-star" style="font-size: 10px;color: #977f14;"></i><span style="font-size:25px;padding:10px; text-align:center; font-weight: 800; color:white">Ac service & Sales</span><i class="fas fa-star" style="font-size: 10px;color: #977f14;"></i></p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  data-aos="fade-right"  data-aos-easing="ease-out-cubic"
          data-aos-duration="2000">
            <h2 style="text-align: center;">Our Service</h2>
            <br>
              <p class="text-center">Extending its services to the various corporate and business spaces in the city as well as residences is Skn Cool Point at Erode. While spreading its wings over a wider customer base, the company has mastered the skill of repairing both window air conditioners and split unit air conditioners. 
              The staff's ability to restore damages caused to various brands of air conditioners is remarkable.<span id="dot">....</span><span id="more">Their experience is what drives them to be able to diagnose problems quickly as well as decide on a plan of action to restore the same. Apart from this, 
              they extend their services to those looking to have their air conditioning units installed. For all the services availed, customers can transact with this place through Cash, Cheques. Open from 08:00am - 20:00pm, this center looks to make its services available for a major part of the day.</span>
              </p>
                <button class="btn btn-grad hvr-sweep-to-right hvr-sweep-to-right" type="button" id="read" onclick="read()">Read More</button>
          </div>
        </div>
      </div>
    </section>
<!--section1 end-->
        <section id="types_area">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 "  data-aos="flip-down"  data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="section-header">
                   <h2 class=" text-center"><span style="color: blue;">Our</span> Service</h2>
                   <p>Services we provide</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4"  data-aos="flip-down" data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="service-type">
                  <div class="type-img">
                    <img src="img/AC-Service.png" alt="">
                  </div>
                  <div class="type-content">
                    <div class="type-info">
                      <h3>Ac Service</h3>
                      <p>For All Brand</p>
                    </div>
                    <p class="type-text">
                      <a href="acservice.html"><button class="btn btn-grad hvr-sweep-to-right hvr-sweep-to-right ">View More</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4"  data-aos="flip-down"  data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="service-type">
                  <div class="type-img">
                    <img src="img/AC-install.jpg" alt="">
                  </div>
                  <div class="type-content">
                    <div class="type-info">
                      <h3>Ac Installation</h3>
                      <p>For All Brand</p>
                    </div>
                    <p class="type-text">
                      <a href="acservice.html"><button class="btn btn-grad hvr-sweep-to-right">View More</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4"  data-aos="flip-down"  data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="service-type">
                  <div class="type-img">
                    <img src="img/AC-dismantle.jpg" alt="">
                  </div>
                  <div class="type-content">
                    <div class="type-info">
                      <h3>AC DISMANTLING</h3>
                      <p>For All Brand</p>
                    </div>
                    <p class="type-text">
                      <a href="acservice.html"><button class="btn btn-grad hvr-sweep-to-right">View More</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4"  data-aos="flip-down"  data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="service-type">
                  <div class="type-img">
                    <img src="img/Gas-filling.jpg" alt="">
                  </div>
                  <div class="type-content">
                    <div class="type-info">
                      <h3>Gas Filling</h3>
                      <p>For All Brand</p>
                    </div>
                    <p class="type-text">
                      <a href="acservice.html"><button class="btn btn-grad hvr-sweep-to-right">View More</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4"  data-aos="flip-down"  data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="service-type">
                  <div class="type-img">
                    <img src="img/AC-maintain.jpg" alt="">
                  </div>
                  <div class="type-content">
                    <div class="type-info">
                      <h3>AC MAINTENANCE</h3>
                      <p>For All Brand</p>
                    </div>
                    <p class="type-text">
                      <a href="acservice.html"><button class="btn btn-grad hvr-sweep-to-right">View More</button></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4"  data-aos="flip-down"  data-aos-easing="ease-out-cubic"
              data-aos-duration="2000">
                <div class="service-type">
                  <div class="type-img">
                    <img src="img/Ref-serv.jpg" alt="">
                  </div>
                  <div class="type-content">
                    <div class="type-info">
                      <h3>Refrigerator</h3>
                      <p>For All Brand</p>
                    </div>
                    <p class="type-text">
                      <a href="refrigeratorservice.html"><button class="btn btn-grad hvr-sweep-to-right">View More</button></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  <!--End of section1-->
   

    <!--section5-->
    <section class="testimonials-section">
      <div class="container-fluid px-lg-4 px-md-4">
        <div class="row">
          <div class="col-md-12">
            <div class="testimonials">
              <div id="carousel1" class="owl-carousel">
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummy1.jpg" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Ramesh <br/><span>Erode</span></h5>
                      <br>
                      <p class="card-text">"Very Professional and neat. Highly Recommended."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummyf2.jpg" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Priya <br/><span>Gobi</span></h5>
                      <br>
                      <p class="card-text">"Excellent Work."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummy2.png" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Khaja Sheriff <br/><span>Perundurai</span></h5>
                      <br>
                      <p class="card-text">"Specialized technician`s... Super cool systems.. experienced workers... Simply satisfied in their work."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummyf1.png" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Sana <br/><span>Sathy</span></h5>
                      <br>
                      <p class="card-text">"Very nice and Friendly Service."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummy3.jpeg" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Arshad <br/><span>Erode</span></h5>
                      <br>
                      <p class="card-text">"Simply Superb work."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummyf4.jpg" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Glory <br/><span>Rangampalayam</span></h5>
                      <br>
                      <p class="card-text">"Clean and Good Service very Professional."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummy4.jpg" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Hemant <br/><span>Perundurai</span></h5>
                      <br>
                      <p class="card-text">"Very Good Service."</p>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="card text-center">
                    <img src="images/dummyf3.jpg" class="card-img-top" alt="Customer image">
                    <div class="card-body">
                      <h5>Saraswathi <br/><span>Nasiyanur</span></h5>
                      <br>
                      <p class="card-text">"Good Service I Have ever seen."</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--section5 End-->
    <!-- modal -->
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
<!-- modal -->


    <!--section6 -->
    <section class="bg">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8"  data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="form-wrap">
              <div class="form-heading">
                <h1 class="text-center">Customer-callback</h1>
                <p class="text-center text-white">To  Conform  Your Service</p>
              </div>
              <form id="regForm" name="regForm" action="connect.php" method="POST">
                <div class="form-group">
                  <label for="name">Name  <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="cb_name" placeholder="Name" id="name" required/>
                </div>
                <div class="form-group">
                  <label for="email">Email  <span style="color: red;">*</span></label>
                  <input type="email" class="form-control" name="cb_email" placeholder="Email"  id="email" required/>
                </div>
                <div class="form-group">
                  <label for="phone">Phone  <span style="color: red;">*</span></label>
                  <input type="tel" class="form-control" name="cb_phone" placeholder="Phone Number" id="phone" pattern="[0-9]{10}" required/>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block" name="submit" id="submit" value="Submit">
                </div>
                <div class="form-group">
                  <input type="reset" class="btn btn-primary btn-block"  id="reset" value="Reset">
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--section End-->
    <!-- floaticon -->
    <section class="float">
      <div class="action" onclick="actionToggle();"> 
        <span><i class="fas fa-comments"></i></span>
        <ul>
          <a href="registrationform.php">  <li><img src="logo/booking-com-(1).png" alt="">Book your service</li></a>
          <a href="https://api.whatsapp.com/send?phone=912222&text=Hi,%20SKN%20Cool%20Point%20need%20more%20information%20about%20skncoolpoint.%20please%20contact%20me."><li><img src="logo/whatsapp.png" alt="">Chat With whatsapp</li></a>
          <a role="button"><li data-toggle="modal" data-target="#loginModal"><img src="logo/enquiry1.png" alt=""> Enquiry </li></a>    
        </ul>
      </div>
    </section>
    <!-- floaticon -->
    
    <!-- footer -->
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
            <a href="https://api.whatsapp.com/send?phone=912222&text=Hi,%20SKN%20Cool%20Point%20need%20more%20information%20about%20skncoolpoint.%20please%20contact%20me."target="_blank">
              <span>
                <i class='bx bxl-whatsapp' ></i>
              </span>
            </a>
            <a href="mailto:skn.syedanish@gmail.com" target="_blank">
              <span>
                <i class='bx bxl-google'></i>
              </span>
            </a>
            <a href="https://www.instagram.com/"target="_blank">
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
   <!-- footer section -->
    <!-- <div id="preloader"></div> -->
    <!-- footer end -->
          <!--script Start-->
          <!--script js-->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
          
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
          
          <!--sweet Alter-->
          <script src="sweetalert2.all.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
          
          <!-- slider -->
          <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
          <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
          <!-- slider -->
          
          <!-- owl js -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
          <!-- owlend js -->

          <!-- animated on scroll -->
          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
           <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
          
          <script src="js/side.js"></script>
          <script src="js/enquir.js"></script>       
          <!--script end-->
           <!-- floaticon -->
          <script type="text/javascript">
              function actionToggle(){
                var action = document.querySelector('.action');
                action.classList.toggle('active')
              }
          </script>
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