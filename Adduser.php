<?php 
session_start();

	include("connection1.php");
	include("functions.php");

	$user_data = check_login($con);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sampleskn";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
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
            <a class="nav-link" href="dashboard.php">DashBoard</a>
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
            <a class="nav-link" href="callbackcl.php">CallBack Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Adduser.php">Add User</a>
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
  <h1 class="text-center">ADDUSER</h1>
  <a role="button" class="btn btn-primary p-2 my-3" href="signup.php"><i class="fa fa-plus" aria-hidden="true"></i> ADDUSER</a>
<div class="table-responsive">

<?php
        $connection =mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"sampleskn");

        $query = "SELECT * FROM  admin ORDER BY id DESC";
        $query_run = mysqli_query($connection,$query);
?>
<!-- table start -->

<table class="table table-striped table-hover ">


        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User_ID</th>
            <th scope="col">Name</th>
            <th scope="col">Password</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
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
                      <td><?php echo $row['user_id']; ?></td>
                      <td><?php echo $row['user_name'];?></td>
                      <td><?php echo $row['password'];?></td>
                      <td><?php echo $row['date'];?></td>
                      <td>
                        <button type="button" class="btn btn-success editbtn"><i class="fas fa-edit"></i> Edit</button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger deletebtn"><i class="fas fa-trash"></i> Delete</button>
                      </td>
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
<!-- table end -->

       <!-- editmodal -->
       <section class="modaled">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <h1 style="color: white; font-weight: 400;font-size: 40px;">UPDATE THE PASSWORD</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="logo/crossicon (1).png" alt="crossicon"></span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="Addupdate.php"  method="POST">
                  <div class="form_fild">
                  <div class="input_group w_100">
                     <label for="">ID<span style="color: red; padding-left: 2px;">*</span></label>
                      <input type="text" name="update_id" id="update_id" class="input" title="Please Enter The First Name"  maxlength="100" required autocomplete="OFF" readonly>
                     </div>
                    <div class="input_group w_100">
                    <label for="" >User_ID<span style="color: red; padding-left: 2px;">*</span></label>
                      <input type="text" name="user_id" id="user_id" class="input" title="Please Enter The First Name"  maxlength="100" required autocomplete="OFF" readonly>
                    </div>
                        
                        <div class="input_group w_100">
                        <label for="">Name<span style="color: red; padding-left: 2px;">*</span></label>
                          <input type="text" class="input" name="user_name" id="user_name"  title="Please Enter Your District" maxlength="30"  required autocomplete="OFF" readonly >
                        </div>
                    
                    <div class="input_group w_100">
                      <input type="text" name="password" id="password" title="Please Enter Password" class="input" required autocomplete="OFF">
                      <label for="" class="placeholder">Password<span style="color: red;  padding-left: 2px;">*</span></label>
                    </div>
                      <div class="input_group">
                        <input type="submit" name="updatedata" id="submit_enq" class="btn" value="Send">
                       </div>
                       
                    </div>
                  
                  </div>
                </form>
            </div>
          </div>
        </div>
     </section>
    <!-- editmodal -->
    

       <!-- deletemodal -->
       <section class="modaled">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <h1 style="color: white; font-weight: 400;font-size: 40px;">DELETE USER ACCOUNT</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="logo/crossicon (1).png" alt="crossicon"></span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="Adddelete.php"  method="POST">
                  <div class="form_fild">
                  <div class="input_group w_100">
                      <input type="hidden" name="delete_id" id="delete_id" class="input" title="Please Enter The First Name"  maxlength="100" required autocomplete="OFF" readonly>
                      <h1 style="color: white;text-align:center; font-weight: 400;font-size: 40px;">!Do you Want to Delete this Account?</h1>
                     </div>
                      <div class="input_group">
                        <input type="submit" name="deletedata" id="submit_enq" class="btn btn-danger btn-block" value="DELETE">
                        <button type="button" class="btn btn-dark btn-block" class="close" data-dismiss="modal">Close</button>
                       </div>
                       
                    </div>
                  
                  </div>
                </form>
            </div>
          </div>
        </div>
     </section>
    <!-- deletemodal -->
    
    


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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
           <!--sweet Alter-->
           <script src="sweetalert2.all.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
         
          <script src="adminjs.js"></script>



          <script type=text/javascript>
          $(document).ready(function(){
            $('.editbtn').on('click',function(){

              $('#editModal').modal('show');

              $tr =$(this).closest('tr');

              var data =$tr.children("td").map(function(){
                return $(this).text();
              }).get();
              console.log(data);

              $('#update_id').val(data[0]);
              $('#user_id').val(data[1]);
              $('#user_name').val(data[2]);
              $('#password').val(data[3]);
            });
          });
        </script>
          
          <script type=text/javascript>
          $(document).ready(function(){
            $('.deletebtn').on('click',function(){

              $('#deleteModal').modal('show');

              $tr =$(this).closest('tr');

              var data =$tr.children("td").map(function(){
                return $(this).text();
              }).get();
              console.log(data);

              $('#delete_id').val(data[0]);
            });
          });
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