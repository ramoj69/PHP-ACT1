
<!-- <?php 
 // Logical NOT (!) operator
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Password Input</title>
	</head>
	<body>
		<form action="http://www.example.com/login.php">
			<p>Username:
				<input type="text" name="username" size="15" maxlength="30" />
			</p>
			<p>Password:
				<input type="password" name="password" size="15" maxlength="30" />
			</p>
            <input type="submit" name="subscribe" value="Login" />
            <br>
            <br>
            <input type="submit" name="subscribe" value="Logout" />
		</form>
	</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start();
    ?>

	<h1>Fill in the input fields below</h1>
	
	<h2>
		User logged in:
		<?php
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
        

		?>		
	</h2>
    
	<a href="unset.php">Logout</a>

	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>
</body>
</html>