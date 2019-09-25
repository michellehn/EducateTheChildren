<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$pos = stripos($actual_link, "FP");
    $new_link = substr($actual_link, 0,$pos);

	$logo = $new_link.'FP/assets/logo.png';
	$menu = $new_link.'FP/assets/mobile-menu.png';
	$index = $new_link.'FP/index.php';
	$news=$new_link.'FP/content/pages/news.php';
	$donate=$new_link.'FP/content/pages/donate.php';
	$story=$new_link.'FP/content/pages/sub/story.php';
	$approach=$new_link.'FP/content/pages/sub/approach.php';
	$people=$new_link.'FP/content/pages/sub/people.php';
	$empowerment=$new_link.'FP/content/pages/sub/empowerment.php';
	$education=$new_link.'FP/content/pages/sub/education.php';
	$development=$new_link.'FP/content/pages/sub/development.php';

	$donate=$new_link.'FP/content/pages/donate.php';
	$sponsor=$new_link.'FP/content/pages/sub/sponsor.php';
	$gifts=$new_link.'FP/content/pages/sub/gifts.php';
	$shopping=$new_link.'FP/content/pages/sub/shopping.php';
	$volunteer=$new_link.'FP/content/pages/sub/volunteer.php';
	$contact=$new_link.'FP/content/pages/contact.php';
	?>

<nav id="main-nav">
	<ul>
		<?php print("<li class='mobile-nav'><img src = '$menu' alt = 'menu'></li>"); ?>
		<?php print("<li><a href= '$index' id='logo'><img src = '$logo' alt = 'ETC-logo'></a></li>"); ?>
		<li class='right-nav'><a id="about">About<i class="fa fa-chevron-down"></i></a></li>
		<li class='right-nav'><a id="programs" class="program-normal">Programs<i class="fa fa-chevron-down"></i></a></li>
		<li class='right-nav'><a id="help" class="program-normal">How to Help<i class="fa fa-chevron-down"></i></a></li>
		<?php print("<li class='right-nav'><a href='$news' id=\"news\" class=\"news-normal\">News</a></li>"); ?>
		<?php print("<li class='right-nav'><a href='$contact' id=\"contact\">Contact</a></li>"); ?>
		<?php print("<li class='right-nav'><a href='$donate' class = 'donate'><span class = \"highlight\">Donate</span></a></li>"); ?>
	</ul>
</nav>
<div id="sub-nav">
	<div class="sub-nav-item" id="about-sub">
		<ul>
			<?php print("<li><a href='$story' id='story-nav'>Our&nbsp;Story</a></li>"); ?>
			<?php print("<li><a href='$approach' id='approach-nav'>Our&nbsp;Approach</a></li>"); ?>
			<?php print("<li><a href='$people' id='people-nav'>People</a></li>"); ?>
		</ul>
	</div>
	<div class="sub-nav-item" id="programs-sub">
		<ul>
			<?php print("<li><a href='$empowerment' id='empowerment-nav'>Womens&nbsp;Empowerment</a></li>"); ?>
			<?php print("<li><a href='$education' id='education-nav'>Childrens&nbsp;Education</a></li>"); ?>
			<?php print("<li><a href='$development' id='development-nav'>Agricultural&nbsp;Development</a></li>"); ?>
		</ul>
	</div>
	<div class="sub-nav-item" id="help-sub">
		<ul>
			<?php print("<li><a href='$donate' id='donate'>Donate</a></li>"); ?>
			<?php print("<li><a href='$sponsor' id='sponsor'>Become&nbsp;a&nbsp;Sponsor</a></li>"); ?>
			<?php print("<li><a href='$shopping' id='shopping'>Help&nbsp;By&nbsp;Shopping</a></li>"); ?>
			<?php print("<li><a href='$volunteer' id='volunteer'>Volunteer</a></li>"); ?>
		</ul>
	</div>
</div>
<div id="mobile-overlay"></div>