<html>
<head></head>
<body>
	<?php 
	$server="localhost";
			$user="root";
			$pass="";
			$db="student";
			$conn = new mysqli($server, $user, $pass, $db);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			if(isset($_GET['id'])){
				echo "yes";
				$i=$_GET['id'];
				$sql="DELETE FROM info WHERE id=$i";
				$conn->query($sql);
			}
	?>
</body>
</html>