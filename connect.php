<?php include 'connection.php';?>
<?php

if(isset($_POST['submit'])){
    $cb_name = $_POST['cb_name'];
    $cb_email = $_POST['cb_email'];
    $cb_phone = $_POST['cb_phone'];

    $query = "INSERT INTO callback (cb_name,cb_email,cb_phone) VALUES ('$cb_name','$cb_email','$cb_phone')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
         
        $_SESSION['status']="Registered Sucessfully";
        $_SESSION['status_code'] ="success";
        header('Location: index.php');
    }
    else{
        $_SESSION['status']="Data Is Not Registered ";
        $_SESSION['status_code'] ="error";
        header('Location: index.php');

    }
}


?>