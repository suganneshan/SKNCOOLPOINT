<?php include 'connection.php';?>
<?php

if(isset($_POST['submit_enq'])){
    $e_name = $_POST['e_name'];
    $e_location = $_POST['e_location'];
    $e_email = $_POST['e_email'];
    $e_phone = $_POST['e_phone'];
    $e_message = $_POST['e_message'];
    $query = "INSERT INTO enquiry_info (e_name,e_location,e_email,e_phone,e_message) VALUES ('$e_name','$e_location','$e_email','$e_phone','$e_message')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
         
        $_SESSION['status']="YOUR ENQUIRY FORM SUBMITTED";
        $_SESSION['status_code'] ="success";
        header('Location:submitform.php');

    }
    else{
        $_SESSION['status']="!OOPS SOME THING WENT WORNG";
        $_SESSION['status_code'] ="error";
        header('Location: submitform.php');

    }
}


?>