<!DOCTYPE html>
<html>
	<head>
		<title>Student Project</title>
	</head>
	<body>
		<?php
		$name=$_POST['st_name'];
		$email=$_POST['mail'];
		$pass=$_POST['pass'];
		$phn=$_POST['phn'];
		$add=$_POST['adrs'];
		$pic=$_FILES['img']['tmp_name'];
		$img = file_get_contents($pic);

		// connection
			$server="localhost";
			$user="root";
			$pass="";
			$db="student";
			$conn = new mysqli($server, $user, $pass, $db);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully <br>";
			// $sql="create database student";
			// $conn->query($sql);

			// $sql="create table info(
			// id INT(05) AUTO_INCREMENT PRIMARY KEY,
			// name VARCHAR(30),
			// email VARCHAR(20),
			// password VARCHAR(40),
			// phone int(15),
			// address VARCHAR(100),
			// pic longblob
			// )";

			// $sql="insert into info(name,email,password,phone,address,pic) values('$name','$email','$pass','$phn','$add',?)";

			// $stmt = mysqli_prepare($conn,$sql);
		 //    mysqli_stmt_bind_param($stmt,"s",$img);
		 //    mysqli_stmt_execute($stmt);
              
		 ?>
	</body>
</html>