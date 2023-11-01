<?php
include_once("d_connection.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST["e-mail"];
    $password=$_POST["password"];
   
    
    $sql = "SELECT * FROM `user` WHERE `e-mail`= ? AND `password`= ?";
    $stat = $conn->prepare($sql);
    $stat->bind_param("ss",$email,$password);
    $stat->execute();
    $result = $stat->get_result();

    if($result->num_rows == 1){
        header("Location: ../home.php ");
    }
    else{
        header("Location:../login.php");
    }
}


?>