<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$pos = stripos($actual_link, "fp");
	$new_link = substr($actual_link, 0,$pos);

	$contact=$new_link.'FP/content/pages/contact.php';
	$login=$new_link.'FP/content/pages/login.php';
	$logout=$new_link.'FP/content/pages/logout.php';
?>
<footer>
	<ul>
		<?php print("<li><a href = '$contact' id='contact'>Contact Us</a> </li>"); ?>
		<li><i class="fa fa-circle"></i> </li>
		<!-- log in / log out using session -->
		<?php 
			if (isset($_SESSION['logged_user_by_sql'])) {
				print("<li><a href = '$logout' id='login-btn'>Log Out</a> </li>");
			} else {
				print("<li><a href = '$login' id='login-btn'>Login</a> </li>");
			}
		?>
	</ul>
	<p>
		Founded by Pamela Carson<br>
		Educate The Children is a 501(c)(3)not-for-profit organization, tax ID 16-1383981<br>
		All donations are tax-deducatible to the extent permitted by the law
	</p>
</footer>