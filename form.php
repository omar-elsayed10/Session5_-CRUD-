<?php 
$servername = "localhost";
$username = "root";
$password = "";
$DB = "regform";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $DB);

// Check connection
/*
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "Connected successfully <br>" ;
}
*/

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$company = $_POST['company'];
$email = $_POST['email'];
$Areacode = $_POST['area_code'];
$phone = $_POST['phone'];
$sub = $_POST['subject'];
$ex = $_POST['exist'];


$sql = "INSERT INTO info (fname	, lname, company, email, Areacode,	phone, sub, exist)
        VALUES('$fname', '$lname', '$company', '$email' , '$Areacode', '$phone' , '$sub', '$ex')";
        
        if ($conn->query($sql) === TRUE) {
           // echo "row inserted successfully";
            header('location:select2.php');
          } else {
            echo "Error creating table: " . $conn->error;
          }
          
          $conn->close();
          

       // echo $sql;

?>

