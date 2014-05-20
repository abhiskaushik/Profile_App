<!--
@Abhishek
17th May,12.01 am;
admin.php
1.Adding admin.php to my base folder
2.Aim to allow admin to add preliminary info abt students to db
3.Also allow admin to keep track abt total number of profiles
4.And search any Students from roll
5.Remove any student profile..!!


-->
<?php
require('core/init.php');
if (empty($_POST) === false) {
 
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
 
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'Sorry, but we need Admin\'s Username and Password.';
	} else if ($users->user_exists($username) === false) {
		$errors[] = 'Sorry that is not Admin';
	}  
            else {
 
		$login = $users->login_admin($username, $password);
		if ($login === false) {
			$errors[] = 'Sorry, that Username/password is invalid';
		}else {
			// username/password is correct and the login method of the $users object returns the user's id, which is stored in $login.
 
 			$_SESSION['id'] =  $login; // The user's id is now set into the user's session  in the form of $_SESSION['id']     
			
			#Redirect the user to home.php.
			header('Location: admin_home.php'); 
			exit();
		}
	}
} 








?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Admin Login</title>
</head>
<body>	
	<div id="container">
				<h1>Hello Admin, Please Login to Add Students to Profile-Module</h1>
 
		<?php if(empty($errors) === false){
 
			echo '<p>' . implode('</p><p>', $errors) . '</p>';			
 
		} 
		?> <center>
		<form method="post" action="">
			<h4>Username:</h4>
			<input type="text" name="username" autofocus>
			<h4>Password:</h4>
			<input type="password" name="password">
			<br>
			<input type="submit" name="Log-In">
		</form> </center>
	</div>
</body>
</html>

