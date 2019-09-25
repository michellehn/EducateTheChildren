<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sponsorships | Educate the Children</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="sponsor-body">
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- description2 block -->
		<div class='container' id="content-1">
			<h1>Become a Sponsor</h1>
			<p>Make a lasting contribution to women and children in Nepal</p>
		</div>

		<!-- Programs block -->
		<div class ='container' id='content-4'>
			<div class = 'textsection'>
				<h1>Our Sponsorships</h1>
			</div>
			<div id = 'sponsor-container'>
				<a>
					<div class="img-container">
						<h2 id = 'women'> Sponsor a Child's Education</h2>
						<img src = "../../../assets/img/about/approach-1.jpg" class="horiz-img" id = 'program1' alt = 'program-1'>
					</div>
				</a>
				<a>
					<div class="img-container">
						<h2 id = 'education'> Women's Group Sponsorship</h2>
						<img src = "../../../assets/img/programs/women-4.jpg" class="horiz-img" id = 'program2' alt = 'program-2'>
					</div> 
				</a>
				<a>
					<div class="img-container">
						<h2 id = 'agriculture'>Pre-Primary Classroom Sponsorship</h2>
						<img src = "../../../assets/img/programs/children.jpg" class="horiz-img" id = 'program3' alt = 'program-3'>
					</div>
				</a>
			</div>
		</div>
		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>