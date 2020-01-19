<!DOCTYPE html>
<html>
	<head>
		<title>Student Project</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php 
			$name=$_POST['st_name'];
			$email=$_POST['mail'];
			$pass=$_POST['pass'];
			$phn=$_POST['phn'];
			$add=$_POST['adrs'];
			$i=$_POST['id'];
			$server="localhost";
			$user="root";
			$pass="";
			$db="student";
			$conn = new mysqli($server, $user, $pass, $db);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			// echo $name;
			// echo $i;
			
			$sql="update info set name='$name', email='$email',password='$pass',phone='$phn'
			,address='$add' where id='$i' ";
			$conn->query($sql);
			header("Location: index.php"); 
		?>
	</body>
</html>