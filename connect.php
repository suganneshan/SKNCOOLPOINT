<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$conn = new mysqli('localhost','root','','skn');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into callback(name,email,phone)
    values(?,?,?)");
    $stmt->bind_param("ssi",$name,$email,$phone);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>