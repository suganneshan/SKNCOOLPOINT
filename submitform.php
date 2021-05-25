<?php include 'connection.php';?> 
<!DOCTYPE html>
<html>
	<head>	
    <link rel = "icon"  href =  "images/skn-logo112.png" type = "image/x-icon"> 
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
  


     
</head>
<body >
<div class="container-fluid">
<img src="images/Thank-You-Page.png" alt="thank you image" width="100%" height="500px">
</div>      
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
                <?php
            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
              ?>
              <script>
                Swal.fire({
                position: 'center',
                icon: "<?php echo $_SESSION["status_code"];?>",
                title: "<?php echo $_SESSION["status"];?>",
                showConfirmButton:true,
                padding: '3em',
                timer: 2500,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                  },
                  hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                  }
              }).then(function() {
                    window.location.href = "index.php";
                });
                </script>
                <?php
                unset($_SESSION['status']);
            }
            ?>
</body>
</html>
