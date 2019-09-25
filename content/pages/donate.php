<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Donate</title>
		<?php include "../includes/header.php"; ?>
	</head>
	<body id="donate-body">
		<?php include "../includes/nav.php"; ?>

		<!-- description2 block -->
		<div class='container' id="content-1">
			<h1>Donate To Educate The Children</h1>
			<h3>Make an online tax-deductible gift today!
				<br>(Tax ID # 16-1383981)</h3>
		</div>
		<div class='container' id="content-2">
			<!-- paypal form-->
			<form id="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="CAAGN7NS6E5S8">
				<div class = 'paypal'>
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal">
				</div>
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
			<p>When you support Educate the Children, you help ensure a better 
				life for women and children in rural Nepal. Gifts to ETC are 
				used to support children's education, women's empowerment and
				entrepreneurial activities, and sustainable agricultural development.
				Here are just a few examples of what your gift can do:
			</p>
			<div id = 'programs-container'>
				<a>
					<div class="img-container">
						<h1 id = 'amt1'> $25</h1>
						<p>Provide a kitchen garden to two families</p>
						<img src = "../../assets/img/programs/agr.jpg" class="horiz-img no-hover" id = 'program1' alt = 'program-1'>
					</div>
				</a>
				<a>
					<div class="img-container">
						<h1 id = 'amt2'> $30</h1>
						<p>Train one teacher in best practices</p>
						<img src = "../../assets/img/programs/children-4.jpg" class="vert-img no-hover" id = 'program2' alt = 'program-2'>
					</div> 
				</a>
				<a>
					<div class="img-container">
						<h1 id = 'amt3'> $100</h1>
						<p>Provide women with goat farming training</p>
						<img src = "../../assets/img/programs/agr-2.jpg" class="vert-img no-hover" id = 'program3' alt = 'program-3'>
					</div>
				</a>
			</div>
			<p class="donate-desc">If you choose, you can honor your loved ones by helping others. 
				We will provide you with gift cards, or send them directly to 
				your friends or family acknowledging that you made a gift in 
				their name. These are gifts that truly give twice! It's that simple.
			</p>
			<p class="donate-desc">
				Use PayPal to make a donation! It's secure, fast, and easy - 
				and you do not need to have a PayPal account, you can just use 
				your credit card. Click on the Donate button above to get started. 
			</p>
		</div>

		<?php include "../includes/footer.php"; ?>
	</body>
</html>