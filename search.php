<?php 
session_start();

	include("connection1.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer</title>
    	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--animated css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      
     <!--datepicker -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css">
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
     <!--END animated css-->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <!--css-->
     <link rel="stylesheet" href="style.css">

     <script type="text/javascript">
      $( function() {
       $( "#from" ).datepicker();
        } );
      </script> 
      <script type="text/javascript"> 
       $( function() {
         $( "#to" ).datepicker();
        } );
        </script>
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
            <a class="nav-link " href="admin.php">DashBoard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acservicecl.php">Ac Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="refrigeratorcl.php">Refrigerator Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="feedbackcl.php">FeedBack</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="enquirycl.php">Enquiry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="callbackcl.php">CallBack Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Adduser.php">Add User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="search.php">Search</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <i class="fa fa-user-circle" aria-hidden="true"></i> WelCome <?php echo $user_data['user_name']; ?>
                
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

<!-- search model -->
<div class="container">
    <h3 style="text-align:center;font-weight:bold;">Search Customer Details</h3>
        <div class="row">
          <div class="col-md-12">
            <form action="search.php" method="POST">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label style="font-size: 20px; color:#5ba6ec;margin-top:10px;" >Phone</label>
                      <input type="tel" name="phone" placeholder="Phone NO" class="form-control">
                  </div>
                </div>
              
                  <div class="col-md-6">
                        <label  style="font-size: 20px; color:#5ba6ec;margin-right:2px;margin-top:10px;">Status</label><br>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" checked="true" id="status0" name="status" value="">
                        <label class="custom-control-label" for="status0">Non Checked</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="status1" name="status" value="new">
                        <label class="custom-control-label" for="status1">New Service</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="status2" name="status" value="pending">
                        <label class="custom-control-label" for="status2">Pending Service</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="status3" name="status" value="close">
                        <label class="custom-control-label" for="status3">Close Service</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="status4" name="status" value="cancel">
                        <label class="custom-control-label" for="status4">Cancellation</label>
                      </div>
                  </div>
                </div>
               <div class="row">
                 <div class="col-md-6">
                    <div class="form-group ">
                      <label  style="font-size: 20px; color:#5ba6ec;margin-top:10px;">Service</label>
                      <select name="service" id="service"  class="form-control">
                      <option>Select Service</option>
                      <option value="Ac service">Ac Service</option>
                      <option value="Refrigeratior service">Refrigeratior service</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-6">
                  <div class="form-group">
                      <input type="hidden" name="" placeholder="" class="form-control">
                  </div>
                </div>
                  <br>
                   
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-block btn-primary form-control" id="submit" value="Search">
                      </div>
                    </div>
                  </div>
              </div>
            </form>  
        </div>
      </div>
</div>
<!-- search modal -->

<div class="container  table-responsive ">
  <table class="table table-striped table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Service</th>
          <th scope="col">Phone</th>
          <th scope="col">Location</th>
          <th scope="col">Registration</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connection1.php');
        if(isset($_POST['submit']))
        {
          $phone= $_POST['phone'];
          $status= $_POST['status'];
          $service= $_POST['service'];
          if($phone != "" || $status != "" || $service != "")
          {
           $query = "SELECT * FROM rform WHERE r_phone = '$phone' OR r_status ='$status' OR r_service ='$service'";
            $data =mysqli_query($con,$query) or die('error');
            if(mysqli_num_rows($data) > 0)
            {
              while($row = mysqli_fetch_assoc($data))
              {
                $id = $row['id'];
                $name = $row['r_name'];
                $email = $row['r_email'];
                $service = $row['r_service'];
                $phone = $row['r_phone'];
                $location = $row['r_location'];
                $fdate = $row['registration'];
                $status = $row['r_status'];
                ?>
                <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $name;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $service;?></td>
                      <td><?php echo $phone; ?></td>
                      <td><?php echo $location; ?></td>
                      <td><?php echo $fdate;?></td>
                      <td><?php echo $status;  ?></td>
                </tr>
                
                <?php
              }
            }
            else
            {
              ?>
              <tr>
                <td>Records Not Founds!</td>
              </tr>
               <?php    
            }
          }
        }
        ?>
      </tbody>
  </table>
</div>


 <!--script js-->
          <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
          <script src="adminjs.js"></script>
  

</body>
</html>