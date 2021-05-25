<?php 
session_start();

	include("connection1.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
<link rel = "icon"  href =  "logo/tabimages.png" type = "image/x-icon"> 
	<title>SKN COOL POINT</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--animated css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!--END animated css-->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <!--css-->
     <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <nav class="navbar navbar-expand-lg  navbar-light  header-nav" id="navbar">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="SKN-logo11.png" width="300px" height="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">DashBoard</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="acservicecl.php">Ac Service</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="refrigeratorcl.php">Refrigerator Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedbackcl.php">FeedBack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link "href="enquirycl.php">Enquiry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="callbackcl.php">CallBack Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Adduser.php">Add User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <i class="fa fa-user-circle" aria-hidden="true"></i> Welcom, <?php echo $user_data['user_name']; ?>
                
            </a>
            <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </nav>
</header>
<section class="container">  
  <h1 class="text-center">CALLBACK</h1>
<div class="table-responsive">

<?php
        $connection =mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"sampleskn");

        $query = "SELECT * FROM  callback ORDER BY id DESC";
        $query_run = mysqli_query($connection,$query);
?>
<table class="table table-striped table-hover ">


        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Registration Time</th>
          </tr>
        </thead>
        <?php
        if($query_run)
        {
          foreach($query_run as $row)
          {
            
        ?>
        
                  <tbody>
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['cb_name']; ?></td>
                      <td><?php echo $row['cb_email'];?></td>
                      <td><?php echo $row['cb_phone'];?></td>
                      <td><?php echo $row['registeration time'];?></td>
                    </tr>
                  </tbody>
            <?php
            }
          }
            else
            {
              $errors= "Record Not Found";
              echo '<div class="alert alert-danger">'.$errors.'</div>';
            }
            ?>  
        
</table>
</div>
</section>
        <!-- footer -->
        <div>
          <img src="images/wave-3.svg" alt="" srcset="">
        </div>
        <footer class="footer">
            
          <div class="container-fluid">
            <div class="row">
              <div class="footer-col">
                <h4>Quick links</h4>
                <ul>
                  <li><a href="index.html"><span><i class="fas fa-chevron-right"></i></span> Home</a></li>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> our services</a></li>
                  <li><a href="Aboutus.html"><span><i class="fas fa-chevron-right"></i></span> About us</a></li>
                  <li><a href="gallery.html"><span><i class="fas fa-chevron-right"></i></span> Gallery</a></li>
                  <li><a href="contact.html"><span><i class="fas fa-chevron-right"></i></span> Contact</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Our Services</h4>
                <ul>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> Ac Installation</a></li>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> Ac Dismantling</a></li>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> Gas Filling</a></li>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> Ac Services</a></li>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> Ac Maintenance</a></li>
                  <li><a href="service.html"><span><i class="fas fa-chevron-right"></i></span> Refrigerator Services</a></li>
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
                  <li><a href="#"><span><i class="fas fa-chevron-right"></i></span>SundayClosed</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>follow us</h4>
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
        <!-- footer -->

			<!--script js-->
			<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
          <script src="adminjs.js"></script>
          
          <script type="text/javascript">
          setTimeout(() =>{
              window.location.reload(true);
          },10000);
          </script>
</body>
</html>