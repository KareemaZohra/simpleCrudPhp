<!DOCTYPE html>
<html>

<head>
    <title>Student Project</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header></header>
    <div id="main">
        <div class="aside">
            <ul>
                <li><a href="index.php">Register</a></li>
                <li><a href="display.php">Profiles</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">More</a></li>
            </ul>
        </div>
        <?php 
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
            $sql="select * from info";
		    $result=$conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="profile">
                    <div class="pinner">
                            <?php
                                 echo '<img class="pp" src="data:image/jpeg;base64,'.base64_encode( $row['pic'] ).'">';
                            ?>
                        <div class="info">
                            <?php 
                                echo "Name : ".$row['name']."<br>";
                                echo "Address : ".$row['address']."<br>";
                                ?>
                        </div>
                        </div>
                        <div class="btnholder">
                        	<a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a class="del" href="delete.php?id=<?php echo $row['id']; ?>"> Delete</a>
                        </div>
                    </div>
                    <?php
                }
            }
			?>
    </div>
    <footer></footer>
</body>

</html>