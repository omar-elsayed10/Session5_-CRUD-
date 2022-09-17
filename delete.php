<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "regform";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $DB);
/*============================================*/ 

$id = $_GET['id'];

$query = "DELETE FROM info WHERE ID = $id";
    if(mysqli_query($conn,$query)){
        header('location:select2.php');
        
    }else{
        echo mysqli_error($conn);
    }





?>
