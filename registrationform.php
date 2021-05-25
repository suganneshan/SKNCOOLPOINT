<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "icon"  href =  "logo/tabimages.png" type = "image/x-icon"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="registrationform.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->
</head>
<body>
    <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
  
      <div class="d-flex justify-content-between  text-left">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Registrationform</li>
        </ol>
      </div>
  
    </div>
  </section><!-- End Breadcrumbs -->
  
    <section class="get_in_touch">
       <div class="container">
        <h1 class="title">BOOK YOUR<br>SERVICE</h1>
    </div>
        <div class="container">
            <form action="registrationinfo.php" method="POST">
            <div class="contact-form row">
               
                <div class="form-field col-lg-6">
                    <input class="input-text" type="text" name="r_name"  id="r_name"  title="Please Enter The Name"  required autocomplete="OFF">
                    <label for="name" class="label">name <span style="color: red;">*</span></label>
                </div>
                <div class="form-field col-lg-6">
                    <input  class="input-text" type="r_email" name="r_email"   id="r_email"  pattern="[a-z0-9._%+-]+@[gmail]+\.[a-z]{2,}$" title="Please Enter The Valid Email Address use only gmail Account" class="input" required autocomplete="OFF">
                    <label for="email" class="label">email <span style="color: red;">*</span></label>
                </div>
                <div class="form-field col-lg-6">
                    <select class="input-text"  name="r_service" id="r_service"  required>
                    <option value="" Select>--Select Your Problem--  <span style="color: red;">*</span> </option><option value="Ac service">Ac service</option><option value="Refrigeratior service">Refrigeratior service</option>
                    </select>
                </div>
                <div class="form-field col-lg-6">
                    <input class="input-text" type="text" name="r_phone"  id="r_phone"   pattern="[0-9]{10}" title="Enter only 10 numbers" maxlength="10" required autocomplete="OFF">
                    <label for="phone" class="label">contact number <span style="color: red;">*</span></label>
                </div>
                <div class="form-field col-lg-12">
                    <input class="input-text" type="text" name="r_location"  id="r_location"  title="Please Enter Your Message"  required  autocomplete="OFF">
                    <label for="message" class="label">Type your full Address<span style="color: red;">*</span></label>
                </div>
                <div class="form-field col-lg-12">
                    <input class="submit-btn" type="submit" id="submit_rgf" name="submit_rgf" value="submit" name="">
                </div>
            
            </div>
        </form>
        </div>
    </section>


     <!--script js-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
     
     <!--sweet Alter-->
     <script src="sweetalert2.all.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

     <!--Bootstrap js-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      
     <script src="js/registrationform.js"></script>

</body>
</html>