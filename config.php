<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_sample_db";

$conn = mysqli_connect($server, $user, $pass, $database);
if($conn == TRUE){
    $sql = "INSERT userInfo ('id', 'username', 'email', 'password') VALUES (8, 'deji', 'dejiogunbanjo9@gmail.com', 'dejitony')";
    mysqli_query($conn, $sql);
    }
?>
