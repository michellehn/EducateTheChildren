<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Shopping for the Greater Good | Educate the Children</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="shopping-body"  class='help-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- description2 block -->
		<div class='container' id="content-1">
			<h1>Help By Shopping</h1>
			<p>The more you shop, the more you can support Educate the Children!
			</p>
		</div>

		<!-- description2 block -->
		<div class='container' id="content-2">
			<div id = 'shopping-container'>
				<a href="https://smile.amazon.com/ch/16-1383981" target="_blank">
					<div class="img-container">
						<h2 id = 'women'>Amazon Smile</h2>
						<img src = "../../../assets/img/help/amazon-logo.jpg" class="horiz-img" id = 'program1' alt = 'program-1'>
					</div>
				</a>
				<a href="http://www.igive.com/html/refer.cfm?memberID=400941&amp;causeID=21649" target="_blank">
					<div class="img-container">
						<h2 id = 'education'> iGive.com</h2>
						<img src = "../../../assets/img/help/igive-logo.png" class="horiz-img" id = 'program2' alt = 'program-2'>
					</div> 
				</a>
				<a href="http://donations.ebay.com/charity/charity.jsp?NP_ID=163" target="_blank">
					<div class="img-container">
						<h2 id = 'agriculture'> Ebay GivingWorks</h2>
						<img src = "../../../assets/img/help/ebay-logo.png" class="horiz-img" id = 'program3' alt = 'program-3'>
					</div>
				</a>
			</div>
		</div>

		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>