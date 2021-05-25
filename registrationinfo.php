<?php include 'connection.php';?>
<?php

if(isset($_POST['submit_rgf'])){
    $r_name = $_POST['r_name'];
    $r_email = $_POST['r_email'];
    $r_service = $_POST['r_service'];
    $r_phone = $_POST['r_phone'];
    $r_location = $_POST['r_location'];
    $query = "INSERT INTO rform (r_name,r_email,r_service,r_phone,r_location) VALUES ('$r_name','$r_email','$r_service','$r_phone','$r_location')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
         
        $_SESSION['status']="YOUR SERVICE IS REGISTERED";
        $_SESSION['status_code'] ="success";
        header('Location:index.php');

    }
    else{
        $_SESSION['status']="!OOPS SOME THING WENT WORNG";
        $_SESSION['status_code'] ="error";
        header('Location:registrationform.php');

    }
}


?>