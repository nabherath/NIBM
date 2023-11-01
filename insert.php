<?php
include_once("d_connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phoneN = $_POST["phone"];
    $email = $_POST["e-mail"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `user`( `name`, `address`, `phone`, `e-mail`, `password`) VALUES ('$name','$address','$phoneN','$email','$password') ";

    if($conn->query($sql) === TRUE){
        header("Location:../home.php");
        exit();
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>