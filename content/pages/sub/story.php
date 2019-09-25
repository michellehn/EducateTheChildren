<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Our History | Educate the Children</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="story" class='program-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- Intro block -->
		<div class='container' id="content-1">
			<h1>A Learning Organization:</h1>
			<h2>Origins of Educate the Children</h2>
		</div>

		<!-- description1 block -->
		<div class='container left' id="content-2">

			<?php 
				include "../../includes/displayPhoto.php";
				displayPhoto(1,'story2','story-2');
			?>

			<p>Known to many as the land of Mount Everest, Nepal is one of the poorest countries in the world: 
				According to the World Bank, the average annual income in 2011 was only US$540, and one-quarter of all
				 Nepalis lived on less than US$1.25 per day. There is a woeful lack of social and economic infrastructure 
				 in the country as a whole, especially in rural areas, where income levels tend to be lower than the national 
				 average. People in lower castes and marginalized ethnic minority groups in particular suffer from 
				 poverty and exclusion. Within these groups, women suffer the most. Educate the Children is committed to 
				 making a difference.
			</p>
			<p>While visiting Kathmandu in 1989, Pamela Carson noticed how many street children there were. She struck 
				up a friendship with three in particular and learned about their lives on the street. What they most
				 wanted, they told her, was to go to school. Pamela had sold her successful business in Boston and spent 
				 time in a Zen monastery in Japan. But in meeting those boys, one of whom she eventually adopted as her
				  own son, she found her life's calling. Pamela arranged to put the three boys in school and so was born 
				  Educate the Children's original sponsorship program to aid street children, orphans and other disadvantaged 
				  children.
			</p>
			<p> Pamela threw herself into building an organization so that more kids could have educational opportunities. 
				In 1990 ETC was formally constituted as a nonprofit organization with its head office in Ithaca, New York 
				and an office in Kathmandu led by Kiran Tewari. Three women whom Pamela met along the way - Barbara Cook, 
				Freema Hillman, and Ursula Zeibarth - worked closely with Pamela and Kirin on a volunteer basis and they
				all put in countless hours building the organization from its humble beginnings. 
				Sadly, Pamela contracted cancer in 1997 and died in 2000. But her legacy 
				lives on in this dedicated and effective organization.
			</p>
		</div>

		<!-- description3 block -->
		<div class='container' id="content-3">
			<h2>The Beginning of ETC's Unique Approach to Lasting Change</h2>
			<p>
				Over time, Pamela and everyone involved with ETC felt that the organization could have a much broader 
				impact on children's educational opportunities by working with families and communities. After a rigorous 
				review of its activities and striving to learn from the long history of development interventions in Nepal,
				 everyone agreed that ETC's strong commitment to education was the best place to start this transformation.
				  Armed with a three-year start-up grant, ETC began building a women's literacy and community development program. 
				That original program has since evolved into ETC's model.
			</p>
		</div>
		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>