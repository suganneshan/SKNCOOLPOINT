<?php 
session_start();

	include("connection1.php");
	include("functions.php");


?>

<!DOCTYPE html>
<html>
<head>
<link rel = "icon"  href =  "logo/tabimages.png" type = "image/x-icon"> 
    <title>SIGNUP PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--animated css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!--END animated css-->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
     <div class="bg"></div>
     <div class="form">
       <form  method="post">     
         <h2>Sign UP</h2>
         <div class="input-box">
           <i class="fa fa-user"></i>
           <input type="text"id="text" name="user_name"placeholder="Username" required>
         </div>
          
         <div class="input-box">
          <i class="fa fa-unlock-alt"></i>
          <input type="password"  id="myInput" name="password"  placeholder="Password" required>     
          </div>
          <input type="checkbox" onclick="myFunction()" value=""> Show Password 
        <div class="input-box"> 
          <input type="submit" name="Sign-in" value="signup">
        </div>
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
          {   
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "sampleskn";
            $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
             
              $username = $_POST['user_name'];
              $password = $_POST['password'];
              $sql_u = "SELECT * FROM admin WHERE user_name ='$username'";
              $sql_e = "SELECT * FROM admin WHERE password ='$password'";
              $res_u = mysqli_query($con, $sql_u);
              $res_e = mysqli_query($con, $sql_e);
          
              if (mysqli_num_rows($res_u) > 0) {
                $name_error = "Sorry... username already taken"; 
                echo '<div class="alert alert-danger">'.$name_error.'</div>';	
              }
              else if(mysqli_num_rows($res_e) > 0){
                $password_error = "Sorry... password already taken"; 
                echo '<div class="alert alert-danger">'.$password_error.'</div>';	
              }
              elseif(!empty($user_name) && !empty($password))
                {
                  $password_error = "Sorry... password already taken"; 
                  echo '<div class="alert alert-danger">'.$password_error.'</div>';	
                }
            else{
              $user_id = random_num(5);
              $query = "insert into admin (user_id,user_name,password) values ('$user_id','$username','$password')";

              mysqli_query($con, $query);

              header("Location: admin.php");
              die;
            }
          }
       ?>
       </form>
       <a role="button" class="btn btn-outline-primary" href="admin.php">go to  Login</a><br><br>
     </div>
     
			    <!--script js-->
			    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
          <!--Bootstrap js-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
          <script src="adminjs.js"></script>
          <script>
          function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
</script>

</body>
</html>

