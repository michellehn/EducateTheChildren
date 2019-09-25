<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Childrens Education | Educate the Children Programs</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="people-body" class='about-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- PHP pseudo code
		may create loop/function to create list of profies of staff numbers that incorporates
		editablePhoto funtion if user is logged in to allow updating of staff member photos.
		-->
		
		<?php
			$people = array(
				"U.S. Staff"=>array(
					"Lisa Lyons"=>"U.S. Director",
					"Teresa Sawester"=>"Sponsorships and Communications Manager"
					),
				"Nepal Staff"=>array(
					"Mira Maiya Sing Rana"=>"Nepal Director",
					"Laxmi Bhakta Basukala"=>"Education Director",
					"Neela Malla"=>"Administration and Finance Officer",
					"Anjoo Lata Singh"=>"Women's Empowerment Officer",
					"Bisham Prasad Mahato"=>"Agricultural Development Officer",
					"Rajanee Kunwar"=>"Documentation Officer",
					"Sangita Shrestha"=>"Administrative and Procurement Assistant",
					"Dayaram Yakami"=>"Office Assistant",
					"Chandi Prashad Shrestha"=>"District Coordinator (field office)",
					"Janga Bahadur Thami"=>"Accounting and Program Assistant (field office)",
					"Hira Maya Thami"=>"Education Coordinator (field office)",
					"Tulasa Basel"=>"Women's Empowerment Program Motivator (field office)",
					"Hishila Thami"=>"Women's Empowerment Program Motivator (field office)",
					"Prasina Thami"=>"Women's Empowerment Program Motivator (field office)",
					"Bishal Karki"=>"Agricultural Program Assistant (field office)",
					"Sujita Khati"=>"Agricultural Program Assistant (field office)",
					"Chock Badahur Thami"=>"Agricultural Program Assistant (field office)"
					),
				"U.S. Board of Directors"=>array(
					"Elisabeth Prentice (President)"=>"Retired non-profit executive",
					"Melvin Goldman (Vice President)"=>"Founder, Intech Ventures",
					"Pete Fritts (Treasurer)"=>"Retired attorney",
					"Barbara Butterworth"=>"International educator and development consultant",
					"Michael Esposito"=>"Human Resources Consultant, Office of Workforce Policy and Labor Relations, Cornell University",
					"Charles Goodman"=>"Associate Professor of Philosophy, Binghamton University",
					"James Johnston"=>"Retired non-profit executive",
					"Sally McConnell-Ginet"=>"Professor Emerita of Linguistics and Feminist, Gender & Sexuality Studies, Cornell University",
					"Susanna Pearce"=>"Independent consultant"
					),
				"U.S. Advisory Council"=>array(
					"Katherine Anderson"=>"Director of Development for International Affairs, Cornell University",
					"Linda Farthing"=>"Writer and former ETC Executive Director",
					"Kathryn March, Ph.D."=>"Professor of Anthropology, Feminist/Gender/Sexuality Studies, and Public Affairs, Cornell University",
					"Katharine Rankin, Ph.D."=>"Associate Professor, Geography and Planning, University of Toronto",
					"Donovan Russell"=>"International Development Consultant and former Country Director, Peace Corps Nepal",
					"Sara Shneiderman, Ph.D."=>"Assistant Professor, Department of Anthropology, University of British Columbia",
					"Dan Sisler, Ph.D."=>"Professor Emeritus of Applied Economics and Management, Cornell University",
					"Colleen Thapalia"=>"Director of Graduate Admissions, College of St. Rose",
					"Mark Turin, Ph.D."=>"Associate Professor, Department of Anthropology and Chair, First Nations Language Program, University of British Columbia"
					),
				);
		foreach ($people as $dpmt=>$group) {
		?>

		<div class='container'>
			<?php print("<h1>$dpmt</h1>"); ?>
			<div class='staff-container'>
				<?php foreach ($group as $name=>$title) {?>
				<div class="person">
					<img src = "../../../assets/img/about/people.png" alt = 'staff'/>
					<!-- TO DO: add php for editable photos here (?) Need to add appropriate photoInPage entries to database first-->
					<?php print("<h3>$name</h3>");
					print("<p>$title</p>"); ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php 
		}
		include("../../../content/includes/footer.php"); ?>
	</body>
</html>