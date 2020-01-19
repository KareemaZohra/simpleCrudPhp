<!DOCTYPE html>
<html>
	<head>
		<title>Student Project</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header>
			<h1>Home Page</h1>
		</header>
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
			<form class="reg" method="POST" action="upload.php" enctype="multipart/form-data">
				<input type="text" name="st_name" placeholder="Name...">
				<input type="email" name="mail" placeholder="Email..">
				<br>
				<input type="password" name="pass" placeholder="password">
				<input type="number" name="phn" placeholder="Phone Number..">
				<br>
				<textarea name="adrs" placeholder="Address.."></textarea>
				Insert image : <input type="file" name="img">
				<button type="submit">Upload</button>
			</form>
		</div>
		<footer></footer>
	</body>
</html>