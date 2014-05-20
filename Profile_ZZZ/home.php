<?php
require ('core/init.php');

$user 		= $users->userdata($_SESSION['id']);
$username 	= $user['Fname'];
 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Home</title>
</head>
<body>	
	<div id="container" style="overflow:auto">
		<ul>
 
			
			<li><a href="logout.php">Logout</a></li>
                        <li><a href="#"> <?php echo $username ?> Details </a></li>
 
		</ul>
		<h1>Hello <?php echo $username, '!'; echo $_SESSION['id']; ?></h1><!-- This will say Hello sachin! for example -->
	</div>
</body>
</html>
