<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Childrens Education | Educate the Children Programs</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="education" class='program-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- Intro block -->
		<div class='container' id="content-1">
			<h1>Focus #2: <br>Children's Education</h1>
			<p class='center-text'>Nepal's educational system generally is not up to the task of providing students with the skills necessary for carving out a better future for themselves, their families and their communities. Less than 50% of teachers have any formal training beyond high school. Many schools lack even basic infrastructure such as benches, tables, blackboards and playgrounds. The failure rate is very high, and few students make it past 5th grade
			</p>
		</div>

		<!-- description1 block -->
		<div class='container left' id="content-2">
			<?php 
				include "../../includes/displayPhoto.php";
				displayPhoto(1,'children2','children-2');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/children-2.jpg" id = 'children2' alt = 'children-2'/> -->
			<h2>Pre-primary Education</h2>
			<h3>The Roots of Success</h3>
			<p>Many of the children ETC works with are from janjati communities and quite often Nepali is their second language. When these children start school in the first grade, they are at an immediate disadvantage as the standard curriculum is taught exclusively in Nepali. In response to community demand to address this problem, ETC created a pre-primary education program which establishes kindergartens in every school with which we work. Kindergartens are fairly new in Nepal, and few government schools have them. Consequently, ETC works closely with school officials, parents, and teachers to establish and maintain the kindergartens as permanent fixtures within schools.
			</p>
			<p>Kindergartens prepare children for a lifetime of learning. Kindergarten classes help children form a habit of coming to school regularly. Educators trained by ETC nurture the innate creativity of children and prepare them for the rigors of primary education and beyond. ETC-sponsored Kindergartens make learning joyful and effective, which encourages the holistic development of the child. Children who have passed through the Kindergarten program develop good study habits, health practices and socialization that will serve them throughout their lives.
			</p>
		</div>

		<!-- description2 block -->
		<div class='container right' id="content-3">
			<?php 
				displayPhoto(2,'children3','children-3');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/children-3.jpg" id = 'children3' alt = 'children-3'/> -->
			<h2>Scholarships</h2>
			<h3>Helping Students Realize Their Potential</h3>
			<p>Keeping children in school is a major challenge for many families. The economic needs of the household often trump the desire parents have to send their kids to school. Girls in particular are held back because they are often charged with caring for younger siblings and otherwise helping their mothers. There is also less interest in investing in girls' education because after marriage they live with the husband's family and work for them. Scholarships are an essential tool for addressing these problems. ETC offers several scholarship programs that support hundreds of children, mostly girls:
			</p>
			<p>ETC constantly reinforces the idea that the education of children goes hand in hand with the overall improvement of the community brought about by women's groups. By promoting inter-generational solidarity, ETC strives to ensure that the education of children benefits not just them as individuals but all of Nepali society and to help a new generation of community leaders to emerge.
			</p>
		</div>

		<!-- description3 block -->
		<div class='container left' id="content-4">
			<?php 
				displayPhoto(3,'children4','children-4');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/children-4.jpg" id = 'children4' alt = 'children-4'/> -->
			<h2>School Rehabilitation</h2>
			<h3>Creating a Joyful Environment</h3>
			<p>Creating a healthy academic atmosphere is essential for educational success. A key feature of ETC's education work is school support. ETC's school rehabilitation work ensures that schools in its program areas have adequate infrastructure. This helps improve the quality of education, increase school enrollments and reduce dropout rates. ETC facilitates the renovation and refurnishing of the school buildings by providing roofing, wall and floor plastering, fencing, retaining walls, doors and windows, toilets, safe drinking water, room extension, playground equipment, furniture, and office equipment. ETC's investment in school support is matched by a community contribution of at least 25% to cover costs, though often the community contribution is larger than ETC's. This ensures that the community develops a sense of responsibility toward the shcool which encourages their continuing involvement
			</p>
		</div>
		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>