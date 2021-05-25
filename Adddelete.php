<?php include 'connection3.php';?> 
<?php
         
if(isset($_POST['deletedata'])){
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM admin  WHERE id = '$id' ";
    $query_run = mysqli_query($conn, $query);
    

    if($query_run){
         
        $_SESSION['status']="USER ACCOUNT IS DELETE";
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