<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Agricultural Development | Educate the Children Programs</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="development" class='program-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- Intro block -->
		<div class='container' id="content-1">
			<h1>Focus #3: <br>Agricultural Development</h1>
			<p class='center-text'>ETC works primarily in rural areas where improving agricultural and livestock production is a key to community well being. The goals of the Agriculture Program are to enable women's group members and other farmers to achieve food security, promote the sustainable use of natural resources, and increase family income.
			</p>
		</div>

		<!-- description1 block -->
		<div class='container left' id="content-2">
			<?php 
				include "../../includes/displayPhoto.php";
				displayPhoto(1,'agr2','agr-2');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/agr-2.jpg" id = 'agr2' alt = 'agr-2'/> -->
			<h2>Holistic Farms</h2>
			<p>ETC's Agricultural Development Program grew out of the desire of village women to learn practical skills to put their new-found literacy to work. In the early days of ETC's agricultural development work, activities emphasized small-scale vegetable production and goat husbandry. In particular, ETC promoted kitchen gardens as a way to provide nutritious vegetables to family members. Women's group members were introduced to the cultivation and consumption of a wide variety of vegetables and leafy greens which diversified and improved the family diet.
			</p>
			<p>The goals of the Agriculture Program have expanded to include helping farmers improve their food security, increase family incomes, and conserve and use natural resources sustainably. The program embraces indigenous knowledge while training farmers on the latest improvements in farming practices, including organic farming techniques to improve soil fertility. Although most activities are carried out by women's groups, local users committees and specialized working groups are also formed that include women's group members and other persons from the community.
			</p>
			<p> ETC's Agriculture Program also actively contributes to public health. Women's group members are shown how to minimize or eliminate the use of agrochemicals, improve solid waste management and dramatically improve the quality of their living space by building proper housing for farm animals: keeping goats and pigs out of the kitchen greatly improves the household environment.
			</p>
		</div>

		<!-- description2 block -->
		<div class='container right' id="content-3">
			<?php 
				displayPhoto(2,'agr3','agr-3');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/agr-3.jpg" id = 'agr3' alt = 'agr-3'/> -->
			<h2>Commercial Agriculture</h2>
			<h3>Broadening Income Opportunities for Farmers</h3>
			<p>The introduction of kitchen gardens and other holistic farm strategies increases the volume and quality of women's agricultural production, but many women have the potential to increase their output significantly enough to have a marketable surplus. Accordingly, ETC helps women's group members initiate or improve commercial production of cash crops such as flowers, vegetables, mushrooms, fruits, ginger, turmeric and cardamom.
			</p>
			<p>In the Kathmandu Valley, with its ready access to urban grocery shops, some women's group members have experimented with leasehold farming and have grown cauliflower, squash, eggplant and tomato for local markets. Despite its risks, leasehold farming of commercially viable vegetables offers the opportunity to earn a substantial amount of money. To date, the ETC women's group members involved in leasehold farming have been quite successful. ETC is currently exploring cooperative marketing strategies to strengthen the commercial potential of women's group members.
			</p>
		</div>

		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>