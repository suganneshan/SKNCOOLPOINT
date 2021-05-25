<?php include 'connection3.php';?> 
<?php
         
if(isset($_POST['updatedata'])){
    $id = $_POST['update_id'];
    $userid = $_POST["user_id"];
    $username = $_POST['user_name'];
    $password = $_POST["password"];
    $query = "UPDATE admin SET password='$password' WHERE id = '$id' ";
    $query_run = mysqli_query($conn, $query);
    

    if($query_run){
         
        $_SESSION['status']="YOUR PASSWORD IS UPDATE";
        $_SESSION['status_code'] ="success";
        header('Location: Adduser.php');
    }
    else{
        $_SESSION['status']="!OOPS SOME THING WENT WORNG";
        $_SESSION['status_code'] ="error";
        header('Location: Adduser.php');

    }
}


?>