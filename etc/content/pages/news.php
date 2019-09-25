<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Newsletters and Updates | Educate the Children</title>
		<?php include "../includes/header.php"; ?>
	</head>
	<body id="news-body">
		<?php include "../includes/nav.php";
			  include "../includes/return.php"; 
			  require_once "../includes/config.php";
			  $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			  if ($mysqli->connect_error) {
		      	die("Connection failed: " . $mysqli->connect_error);
			  }
			  ?>

		  <!-- NEWSLETTER SIGNUP -->
		<div id="newsletter-signup">
			<div id = 'newsletter'>
				<h2 id = 'title'>Stay in the loop!</h2>
				<p class='center-text'>Sign up for our newsletter to get the most recent updates and photos from
				our programs in Nepal</p>
			</div>
			<form method = 'post'>
				<input type = 'text' id = 'email' name = 'email' placeholder = 'Your Email'/>
				<input type = 'submit' name = 'signin' class = 'home-button' value = 'sign up'><p id ='email_warning'></p>
				<script type="text/javascript">
				var email_input = document.getElementById('email');
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				email_input.onblur = function(){
					if (email_input.value == ''){
						document.getElementById('email_warning').innerHTML = "Please type in an email";
					}
					else if(!re.test(email_input.value)){
						document.getElementById('email_warning').innerHTML = "Please enter a valid email";
					}
					else{
						document.getElementById('email_warning').innerHTML = "";
					}
				}
				</script>
			</form>
		</div>

		<div id='news-content'>
			<?php
			if(isset($_POST['signin'])){
				if(!empty($_POST['email']) && preg_match("/^[A-z0-9;!,\.\-\$\#()' *]+$/", $_POST['email']) && strlen(trim($_POST['email']))<500){
					$email = strip_tags(htmlentities($_POST['email']));
					require_once "content/includes/config.php";
					$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
					if ($mysqli->connect_error) {
				    	die("Connection failed: " . $mysqli->connect_error);
					}
					$query = "INSERT INTO subscribers(`email`) VALUES ('".$email."')";
	       		    $mysqli -> query($query);
        		    $mysqli -> close();

				}
				else{
					$message = "Please type your email into the textbox";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
			?>


			<!-- EVERYTHING ELSE -->
		<?php 
			if(isset($_SESSION['logged_user_by_sql'])){
				$error = FALSE;
				print "<div class='main-form' id='new-news-form'>";
				print "<form action = 'news.php' method = 'post' enctype = 'multipart/form-data'>";
				print "<h1>Create New Post</h1>";
				print "<label for='news-title'>Title:</label> <input type = 'text' name = 'news-title'><br><br>";
				if ((!isset($_POST['news-title']) or $_POST['news-title'] =='') and (isset($_POST['news-text']) and $_POST['news-text'] != '')){
					print "<p>Please enter a title</p>";
					$error = TRUE;
				}
				print "<label for='news-text'>Text:</label> <textarea rows = '4' cols = '50' id='news-text' name = 'news-text'></textarea><br><br>";
				if ((isset($_POST['news-title']) and $_POST['news-title'] != '') and (!isset($_POST['news-text']) or $_POST['news-text'] == '')){
					print "<p>Please enter text.</p>";
					$error = TRUE;
				}
				print "<input type= 'file' name = \"news-photos[]\" multiple/><br><br>";
				print "<input type = 'submit' id = 'new-news' class='home-button' value = 'Submit' name = 'new-news'/>
				</form></div>";
				if ($error != TRUE and (isset($_POST['news-text']) and $_POST['news-text'] != '')){
					$query = 'SELECT COUNT(newsID) FROM news';
					$result = $mysqli->query($query);
					$row = $result -> fetch_row();
					$title = $_POST['news-title'];
					$text = explode("\n", $_POST['news-text']);
					$date = date("Y-m-d");
					$filename = 'news' . $row[0] . '.php';
					$string = '';

					//adds text in database and creates new news entry
					$text_section = '';
					for ($y = 0; $y < count($text); $y++){
						$text_section = $text_section . $text[$y];
					}
					$text_section = str_replace("'", "\'", $text_section);
					$title = str_replace("'", "\'", $title);
					$query = "INSERT INTO news(filePath, text, title) VALUES ('newspages/$filename', '$text_section', '$title')";
					if ($mysqli -> query($query) == FALSE) {
						print "There was an error.";
						print $query;
					}
					$query = "SELECT newsID FROM news WHERE text = '$text_section' AND filePath = 'newspages/$filename'";
					$result = $mysqli -> query($query);
					$row = $result -> fetch_row();
					$newsid = $row[0];

					if (!isset($_FILES['news-photos']) or $_FILES['news-photos']['name'][0] == ''){
						$string = "<div class='container' id='content-2'>
									<p>$text_section</p>
									</div>";
					}

					else if ((count($text) == 1 and $text[0] != '') || count($_FILES['news-photos']['name']) == 1){
						$photos = $_FILES['news-photos'];

						//adds photo into database, move photos into correct space
						$photo_name = $photos['name'][0];
						$temp_name = $photos['tmp_name'][0];
						move_uploaded_file($temp_name, "../../assets/img/newspages/$photo_name");
						$query = "INSERT INTO newsphotos(filePath) VALUES ('../../assets/img/newspages/$photo_name')";
						$mysqli -> query($query);

						//adds connection photo
						$query = "SELECT photoID FROM newsphotos WHERE filePath = '../../assets/img/newspages/$photo_name'";
						$result = $mysqli -> query($query);
						$row = $result-> fetch_row();
						$photoID = $row[0];
						$query2 = "INSERT INTO photosinnews(photoID, newsID, placeID) VALUES ($photoID, $newsid, 0)";
						$mysqli-> query($query2);

						$string = "<div class='container left' id='content-2'>
									 <img class='container-img' src = '../../../assets/img/newspages/$photo_name' id = '$filename-0' alt = '$filename-0'/>
									<p>$text_section</p>
									</div>";

					}
					else if (count($text) >= count($_FILES['news-photos']['name'])){
						$photos = $_FILES['news-photos'];
						$string = '';
						for ($x = 0; $x < count($photos['name']); $x++){
							$content_number = $x + 2;
							if ($x == 0 || $x % 2 == 0){
								$class = 'container left';
							}
							else {
								$class = 'container right';
							}
							if (count($text) == $x){
								$text_section = '';
								for ($y = $x; $y < count($text); $y++){
									$text_section = $text_section . $text[$y];
								}
							}
							else {
								$text_section = $text[$x];								
							}
							$picture_place = $x + 1;

							//adds photo into database, move photos into correct space
							$photo_name = $photos['name'][$x];
							$temp_name = $photos['tmp_name'][$x];
							move_uploaded_file($temp_name, "../../assets/img/newspages/$photo_name");
							$query = "INSERT INTO newsphotos(filePath) VALUES ('../../assets/img/newspages/$photo_name')";
							$mysqli -> query($query);

							//adds connection photo
							$query = "SELECT photoID FROM newsphotos WHERE filePath = '../../assets/img/newspages/$photo_name'";
							$result = $mysqli ->query($query);
							$row = $result-> fetch_row();
							$photoID = $row[0];
							$query2 = "INSERT INTO photosinnews(photoID, newsID, placeID) VALUES ($photoID, $newsid, $x)";
							$mysqli -> query($query2);

							//content display in new file
							$string = $string . "<div class='$class' id='$content_number'>
												<img class='container-img' src = '../../../assets/img/newspages/$photo_name' id = '$filename-$x' alt = '$filename-$x'/>
												<p>$text_section</p>
												</div>";
						}
					}
					else {
						//more photos than paragraphs, extra photos go on bottom in a grid
						$photos = $_FILES['news-photos'];
						$string = '';
						for ($x = 0; $x < count($text); $x++){
							$content_number = $x + 2;
							if ($x == 0 || $x % 2 == 0){
								$class = 'container left';
							}
							else {
								$class = 'container right';
							}
							$text_section = $text[$x];								
							$picture_place = $x + 1;

							//adds photo into database, move photos into correct space
							$photo_name = $photos['name'][$x];
							$temp_name = $photos['tmp_name'][$x];
							move_uploaded_file($temp_name, "../../assets/img/newspages/$photo_name");
							$query = "INSERT INTO newsphotos(filePath) VALUES ('../../assets/img/newspages/$photo_name')";
							$mysqli -> query($query);

							//adds connection photo
							$query = "SELECT photoID FROM newsphotos WHERE filePath = '../../assets/img/newspages/$photo_name'";
							$result = $mysqli -> query($query);
							$row = $result-> fetch_row();
							$photoID = $row[0];
							$query2 = "INSERT INTO photosinnews(photoID, newsID, placeID) VALUES ($photoID, $newsid, $x)";
							$mysqli -> query($query);

							$string = $string . "<div class='$class' id='$content_number'>
												<img class='container-img' src = '../../../assets/img/newspages/$photo_name' id = '$filename-$x' alt = '$filename-$x'/>
												<p>$text_section</p>
												</div>";
						}
						$string = $string ."<div class='extra-img'>";
						for ($y = count($text) + 1; $y < count($photos['name']); $y++) {

							//adds photo into database, move photos into correct space
							$photo_name = $photos['name'][$y];
							$temp_name = $photos['tmp_name'][$y];
							move_uploaded_file($temp_name, "../../assets/img/newspages/$photo_name");
							$query = "INSERT INTO newsphotos(filePath) VALUES ('../../assets/img/newspages/$photo_name')";
							$mysqli -> query($query);

							//adds connection photo
							$query = "SELECT photoID FROM newsphotos WHERE filePath = '../../assets/img/newspages/$photo_name'";
							$result = $mysqli -> query($query);
							$row = $result-> fetch_row();
							$photoID = $row[0];
							$query2 = "INSERT INTO photosinnews(photoID, newsID, placeID) VALUES ($photoID, $newsid, 100)";
							$mysqli -> query($query2);

							$picture_place = $y + 1;
							$string = $string . "<img class='container-img' src = '../../../assets/img/newspages/$photo_name' id = '$filename-$y' alt = '$filename-$y'/>";
						}
						$string = $string ."</div>";
						// $string = $string . "<img class='container-img' src = '../../../assets/img/newspages/$photo_name' id = '$filename-$y' alt = '$filename-$y'/>";
					}

					//makes php file
					$file = fopen("newspages/$filename", 'w');
					$status = fwrite($file, "<?php session_start(); ?>
									<!DOCTYPE HTML>
									<html>
										<head>
											<title>$filename</title>
											<link rel='icon' href='../../../assets/logo-circle.png'>
											<link rel='stylesheet' href= '../../../stylesheets/css/header.css'>
											<link rel='stylesheet' href='../../../stylesheets/css/footer.css'>
											<link rel='stylesheet' href='../../../stylesheets/css/main.css'>
											<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
											<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,300,500' rel='stylesheet' type='text/css'>
											<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

											<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
											<?php
												print('<script src=\'../../../js/script.js\' async></script>');
											?>
											<meta name='viewport' content='width=device-width, initial-scale=1' />
											<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
										</head>
										<body id='$filename' class='program-body news-body'>
										<?php include '../../includes/nav.php'; ?>
										<div class='filler'></div>
										<div class='news-full'>
											<a class='back' href='../news.php'>&larr; Back to All Posts</a>
											<h1>$title</h1>
											<p class='center-text'>$date</p>
										");	
					$string = $string . "</div><?php include '../../includes/footer.php'; ?></body></html>";
					$status = fwrite($file, $string);
				}
			}
		?>
		<!-- <h1 id="news-title">News</h1> -->
		<!-- description2 block -->
 		<?php $query = "SELECT newsID, filePath, text, title FROM news ORDER BY dateCreated DESC";
			$result = $mysqli -> query($query);
			$row = $result -> fetch_row();
			$x = 0;
			while ($row != NULL){
				$news_id = $row[0];
				$title = $row[3];
				$text = $row[2];
				$text = substr($text, 0, 500) . "...";
				$filePath = $row[1];
				print "<div class='news-item' id='item-$x'>";
				print "<h2>$title</h2>";
				$query2 = "SELECT newsphotos.filepath FROM newsphotos INNER JOIN photosinnews ON newsphotos.photoID = photosinnews.photoID WHERE newsID = $news_id AND placeID = 0";
				$result2 = $mysqli -> query($query2);
				$row2 = $result2 -> fetch_row();
				if (!empty($row2)){
					print "<img src = '$row2[0]' class='horiz-img preview1' alt = 'preview$x'>
							<p>$text</p>";
				}
				else {
					print "<p>$text</p>";
				}
				print "<a href = '$filePath'>Read More</a>
						</div>";
				$x++;
				$row = $result -> fetch_row();
			} ?>		
		</div>

		<?php include("../../content/includes/footer.php"); ?>
	</body>
</html>