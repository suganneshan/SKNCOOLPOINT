<?php include 'connection.php';?>
<?php

if(isset($_POST['submit_reg'])){
    $C_name = $_POST['C_name'];
    $C_location = $_POST['C_location'];
    $C_email = $_POST['C_email'];
    $C_phone = $_POST['C_phone'];
    $C_message = $_POST['C_message'];
    $C_rating = $_POST["C_rating"];
    $query = "INSERT INTO contact_info (C_name,C_location,C_email,C_phone,C_message,C_rating) VALUES ('$C_name','$C_location','$C_email','$C_phone','$C_message','$C_rating')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
         
        $_SESSION['status']="YOUR FEEDBACK FORM SUBMITTED";
        $_SESSION['status_code'] ="success";
        header('Location: contact.php');
    }
    else{
        $_SESSION['status']="!OOPS SOME THING WENT WORNG";
        $_SESSION['status_code'] ="error";
        header('Location: contact.php');

    }
}


?>