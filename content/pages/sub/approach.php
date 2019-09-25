<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Our Approach</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="approach-body" class='program-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- Intro block -->
		<div class='container' id="content-1">
			<h1>Our Approach:</h1>
			<h2>ETC's Model for Lasting Change</h2>
		</div>

		<!-- description1 block -->
		<div class='container left' id="content-2">

			<?php 
				include "../../includes/displayPhoto.php";
				displayPhoto(1,'women3','women-3');
			?>

			<!-- <img class='container-img' src = "../../../assets/img/about/approach-1.jpg" id = 'women3' alt = 'women-3'/> -->
			<p>Nepal is, economically, a very poor country in which per capita annual income is only $440. Rural areas especially suffer from a woeful lack of social and economic infrastructure. People in dalit ("untouchable") and janjati (ethnic minority) communities are most likely to be subject to poverty and exclusion and within these groups women suffer the most.
			</p>
			<p>ETC's model builds self-reliance in dalit and janajati communities by ensuring quality education for children and adults through programs that build awareness and foster sustainable improvements in standards of living. Our approach has three interlocking components: children's education, women's empowerment, and agricultural development. Read about one of our recent projects next.
			</p>
		</div>

		<!-- Programs block -->
		<div class ='container' id='content-4'>
			<div class = 'textsection'>
				<h1>Our Programs</h1>
				<p class='center-text'>ETC's model builds self-reliance in dalit and janajati communities by ensuring quality 
					education for children and adults through programs that build awareness and foster 
					sustainable and improvements over the standard of living.</p>
			</div>
			<div id = 'programs-container'>
				<a href="/fp/content/pages/sub/empowerment.php">
					<div class="img-container">
						<h2 id = 'women'> Women's <br> Empowerment</h2>
						<img src = "../../../assets/img/programs/programs-1.jpg" class="vert-img" id = 'program1' alt = 'program-1'>
					</div>
				</a>
				<a href="/fp/content/pages/sub/education.php">
					<div class="img-container">
						<h2 id = 'education'> Children's <br> Education</h2>
						<img src = "../../../assets/img/programs/programs-2.jpg" class="horiz-img" id = 'program2' alt = 'program-2'>
					</div> 
				</a>
				<a href="/fp/content/pages/sub/development.php">
					<div class="img-container">
						<h2 id = 'agriculture'> Agricultural <br> Development</h2>
						<img src = "../../../assets/img/programs/programs-3.jpg" class="horiz-img" id = 'program3' alt = 'program-3'>
					</div>
				</a>
			</div>
		</div>
		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>