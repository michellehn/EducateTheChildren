<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log In | Educate the Children</title>
		<?php include "../../content/includes/header.php"; ?>
	</head>

	<body id="login-body">

		<?php

		include "../../content/includes/nav.php";

		//Taken from example posted on Piazza

		$post_username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
		$post_password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );

		if ( empty( $post_username ) || empty( $post_password ) ) {
		?>

		<!--Login Form-->
		<div class='container'>
			<div class="main-form">
				<h1>Log in</h1>
				<form action="login.php" method="post">
					<div class='form-el'>
						<label for='username'>Username </label> 
						<input id ='username' type='text' name='username' required/>
					</div>
					<div class='form-el'>
						<label for='password'>Password </label> 
						<input id='password' type='password' name='password' required/>
					</div>
					<button type="submit" value="Submit" class='home-button'>Login</button>
				</form>
			</div>
		</div>

		<?php

		} //end of if

		else {
			/* SQL to create a table that matches the fields used here
			 * username and password are the important fields. Since username
			 * has to be unique, you could use it for a primary key instead of creating
			 * a specific auto number field as I did here.
			 * You'll have to decide whether to have fields for first name, last name and anything else about users
			 *
			CREATE TABLE IF NOT EXISTS `users` (
			  `userID` int(11) NOT NULL AUTO_INCREMENT,
			  `hashpassword` varchar(255) NOT NULL,
			  `username` varchar(50) NOT NULL,
			  `name` varchar(50),
			  PRIMARY KEY (`userID`),
			  UNIQUE KEY `idx_unique_username` (`username`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
			*/

			require_once '../includes/config.php';
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if( $mysqli->connect_errno ) {
				//uncomment the next line for debugging
				echo "<p>$mysqli->connect_error<p>";
				die( "Couldn't connect to database");
			}
			//hash the entered password for comparison with the db hashed password

			//$hashed_password = password_hash($post_password, PASSWORD_DEFAULT) . '<br>';

			//Un-comment this line to print out the hash of a password you enter.
			//This value is what you need to enter into the hashpassword field in the database
			//echo "<p>Hashed password: $hashed_password</p>";
			
			//Check for a record that matches the POSTed username
			//Note: This SQL lacks proper security. That's coming later
			$query = "SELECT * FROM login WHERE username = '$post_username'";

			$result = $mysqli->query($query);
			
			//Uncomment the next line for debugging
			//echo "<pre>" . print_r( $mysqli, true) . "</p>";

			//Make sure there is exactly one user with this username
			if ( $result && $result->num_rows == 1) {
				
				$row = $result->fetch_assoc();
				//Debugging
				//echo "<pre>" . print_r( $row, true) . "</p>";
				
				$db_hash_password = $row['hashpassword'];
				$name = $row['name'];
				
				if( password_verify( $post_password, $db_hash_password ) ) {
					$db_username = $row['username'];
					$_SESSION['logged_user_by_sql'] = $db_username;
				}
			} 
			
			$mysqli->close();
			
			print("<div class='container'>");
			print("<div class='main-form'>");
			if ( isset($_SESSION['logged_user_by_sql'] ) ) {

				if(!empty($name)){
					print("<h2>Welcome, $name.</p>");
				}
				else{
					print("<h2>Welcome, $db_username.</p>");
				}

			} else {
				print("<h3 class='alert'>Uh oh!</p>");
				echo '<p class="alert">The login information you entered does not match an account in our records.</p>';
				echo '<p class="alert">Please <a href="login.php" class="link">try again</a>.</p>';
			}
			print("</div>");
			print("</div>");
			
		} //end if isset username and password
		
		?>

		<?php include("../../content/includes/footer.php"); ?>
	</body>

</html>