<?php
	//Need to start a session in order to access it to be able to end it
	session_start();
	
	if (isset($_SESSION['logged_user_by_sql'])) {
		$olduser = $_SESSION['logged_user_by_sql'];
		unset($_SESSION['logged_user_by_sql']);
	} else {
		$olduser = false;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Logged Out | Educate the Children</title>
		<?php include "../includes/header.php"; ?>
	</head>
	<body id="login-body">
		<?php include "../includes/nav.php"; ?>
		<div class='container'>
			<div class="main-form">
				<?php
					//echo '<pre>' . print_r( $_SESSION, true ) . '</pre>';
					if ( $olduser ) {
						print("<h3>Thank you for using our page.</h3>");
						print("<p>Return to our <a href='login.php'>Login page</a></p>");
					} else {
						print("<h2>You have not logged in.</h2>");
						print("<p>Go to our <a href='login.php' class='link'>Login page</a></p>");
					}
				?>
			</div>
		</div>
		<?php include "../includes/footer.php"; ?>
	</body>
</html>