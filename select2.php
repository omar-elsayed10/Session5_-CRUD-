<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "regform";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $DB);
/*============================================*/ ?>

<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<h1 style="text-align: center; background-color: #B0C4DE; padding :0%; margin:0%">CRUD List</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
	  <th scope="col">Phone</th>
	  <th scope="col">company</th>
	  <th scope="col">Operation </th>
    </tr>
  </thead>
  
  <?php
  	$i = 1;
	$query = "SELECT * FROM info";
	$run = $conn->query($query);
	if($run->num_rows > 0){
		while($row = $run->fetch_assoc()){
			$id =$row['ID'];
	
  ?>
  <tr>
	<td><?php echo $i++ ?></td>
	<td><?php echo$row['fname']  ?></td>
	<td><?php echo $row['lname'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['phone'] ?></td>
	<td><?php echo $row['company'] ?></td>
	<td>
		
		<a href="edit.php?id=<?php echo $id?>">
			<button type="button" class="btn btn-primary">Edit</button>
		</a>

		<a href="delete.php?id=<?php echo $id?>" onclick="return confirm(Are you sure?)">
			<button type="button" class="btn btn-danger">Delete</button>
	    </a>
		
	</td>


  </tr>
  <?php 
		}
	}
  ?>

</table>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>