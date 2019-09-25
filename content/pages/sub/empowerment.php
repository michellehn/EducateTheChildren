<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Womens Empowerment | Educate the Children Programs</title>
		<?php include "../../includes/header.php"; ?>
	</head>
	<body id="empowerment" class='program-body'>
		<?php include "../../../content/includes/nav.php"; ?>

		<!-- Intro block -->
		<div class='container' id="content-1">
			<h1>Focus #1: <br>Women's Literacy and Empowerment</h1>
			<p class='center-text'>Women in Nepal routinely suffer from lack of access to education, 
				money and technology. Barely 25% of Nepali women are literate. 
				They face systematic discrimination due to institutionalized 
				chauvinism and a pronounced cultural preference for sons in Nepali 
				society. The fundamental goal of ETC's Women's Empowerment program 
				is empowerment - working with women to help them gain the confidence 
				and skills to be leaders in their communities
			</p>
		</div>

		<!-- description1 block -->
		<div class='container left' id="content-2">
			<?php 
				include "../../includes/displayPhoto.php";
				displayPhoto(1,'women3','women-3');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/women-3.jpg" id = 'women3' alt = 'women-3'/> -->
			<h2>Providing quality education for women</h2>
			<p>Less than 25% of Nepali women are literate. In a society where females
			 are generally given more duties and less freedom and opportunities than their male peers, 
			 increasing the availability of education and literacy for women and girls of all ages is a 
			 vital step forward. When women are able to access and understand the written word, a world 
			 of potential opens before them. While ETC's Women's Development Program has grown to encompass 
			 the formation of women's groups and cooperatives, the creation of savings and loan associations, 
			 and initiation of a host of social and economic development activities, literacy training remains 
			 the starting point.
			</p>
			<p>The Basic Literacy Class lasts six months. After successful completion of this class, the women 
				enroll in an Advanced Literacy class for another six months, which is followed by a three month Legal
				 Literacy class. Legal Literacy teaches women about their fundamental rights as women, as Nepali citizens
				  and as human beings. Literacy classes are an intensive 2 hours a night, 6 nights a week.
			</p>
			<p> Newly literate women are encouraged to express their views in Learner Generated Material workshops. 
				They write articles which ETC collects and publishes, and the publications are distributed to all 
				women's group members. Seeing their own written words formally presented provides a sense of 
				accomplishment, validation, and increases their self-confidence. Celebration of events such as 
				International Women's Day, Literacy Day, World Health Day and others help motivate women and their 
				communities to achieve the goals they set for themselves.
			</p>
		</div>

		<!-- description2 block -->
		<div class='container right' id="content-3">
			<?php 
				displayPhoto(2,'women5','women-5');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/women-5.jpg" id = 'women5' alt = 'women-5'/> -->
			<h2>Women's Groups and Cooperatives</h2>
			<h3>Local Institutions Leading into the Future</h3>
			<p>Basic literacy classes are an intense experience and the participants develop close bonds 
				of friendship and solidarity. ETC helps participants to formally organize as a women's group 
				and to gather the money necessary to start their own savings fund. The formation of these groups 
				is an essential feature of ETC's work.
			</p>
			<p>To ensure the sustainability of the changes ETC helps to introduce, communities must also have local institutions 
				they can rely on so that their collective energies may remain focused and engaged. For this reason, once women's 
				groups have been operating for 3 to 4 years, ETC helps them form management committees, which receive further 
				training in cooperative organization, record keeping, and saving/credit management. These management committees 
				then come together to register as a cooperative and another cycle of community development is initiated. The difference 
				is that the women's cooperative itself takes charge of the process and ETC's assistance is gradually phased out, 
				leaving the determination of ongoing development work in the capable hands of women's group members.
			</p>
			<p> The effect of these programs on the lives of women and whole communities is profound. Through their newfound skills 
				and income, women are able to fulfill many of the basic needs of the family. Access to credit allows them to start 
				other productive activities and steadily increase their incomes. Through their achievements, they build not only 
				their self-esteem, but become more respected by the men in their lives which places them at a more equitable level 
				in Nepali society. Finally, they begin to act independently and with confidence.
			</p>
		</div>

		<!-- description3 block -->
		<div class='container left' id="content-4">
			<?php 
				displayPhoto(3,'women6','women-6');
			?>
			<!-- <img class='container-img' src = "../../../assets/img/programs/programs-1.jpg" id = 'women6' alt = 'women-6'/> -->
			<h2>Public Health</h2>
			<h3>A Key to Community Well Being</h3>
			<p>Rural women's health needs are often given short-shrift in Nepal. Nepali women spend countless hours working in the fields,
			 carrying heavy loads, and cooking with wood fuel in poorly-ventilated kitchens. Women often eat after the men in their 
			 families, and have to sustain themselves with whatever food is remaining. Given this disparity and the lack of awareness
			  regarding health issues of concern to village women, ETC offers a variety of trainings and programs, which help women's 
			  group members improve the health and sanitation of their families, homes, and communities.
			</p>
			<p>Through Health Awareness trainings, women's group members learn basic strategies for taking better care of themselves 
				and their families. Safe Motherhood trainings provide women with a basic understanding of pre-natal care, which 
				leads to healthier pregnancies and healthier babies. Health education programs are also facilitated in the schools 
				with which ETC works, instilling in students an awareness of health issues and an understanding of the need for good 
				hygiene. Every women's group member is provided with materials needed for constructing a toilet (including a septic tank) 
				which improves family hygiene and keeps the surrounding environments clean. ETC also helps women's group members learns to 
				use alternative cooking sources, such as smokeless bio-briquette stoves.
			</p>
		</div>
		<?php include("../../../content/includes/footer.php"); ?>
	</body>
</html>