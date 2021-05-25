<?php include 'connection3.php';?> 
<?php
         
if(isset($_POST['pendingdata'])){
    $id = $_POST['pending_id'];
    $status = $_POST['r_status'];
    $query = " UPDATE rform  SET r_status = '$status' WHERE r_phone = '$id' AND r_service ='Ac service';";
    $query_run = mysqli_query($conn, $query);
    
    if($query_run){
         
        $_SESSION['status']="Service status is changed";
        $_SESSION['status_code'] ="success";
        header('Location: acservicecl.php');
    }
    else{
        $_SESSION['status']="!OOPS SOME THING WENT WORNG";
        $_SESSION['status_code'] ="error";
        header('Location: acservicecl.php');

    }

}
?>