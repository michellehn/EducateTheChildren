<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Photos | Educate the Children</title>
		<?php include "../includes/header.php"; ?>
	</head>

	<body id="updatePhoto-body">
		<?php include "../../content/includes/nav.php"; ?>

		<?php

		//*** FORM NEEDS ADDITIONAL CSS (?) ***
		//*** ALL <p class='alert'> ALERT MESSAGES NEED CSS (they're being covered up by nav/footer)***

		//Currently, updatePhoto.php allows user to REPLACE photos on pages with NEW photos that they UPLOAD,
		//but does not let user choose from EXISTING photos to replace the photo they select.
		//TO DO: replace with existing photo functionality (using javascript?)
		//I believe DJMs said that if user wanted to choose from existing photos, javascript would take care of that,
		//but I am not confident in javascript to implement using it.

		//TO DO: Add photos in people.php to database as well; they do not have editable photo functionality yet.

		//include "../includes/nav.php"; NAV COVERS alert messages, so commented out for now. NEED CSS

		if(isset($_SESSION['logged_user_by_sql'])){ //if logged in
		
			if(isset($_GET['pageID']) && $_GET['pageID'] && preg_match("/^[0-9]+$/", $_GET['pageID'])  //if 'pageID' is set and is an integer (input checking)
				&& isset($_GET['photoPlace']) && $_GET['photoPlace'] && preg_match("/^[0-9]+$/", $_GET['photoPlace']))  //if 'photoID' is set and is an integer (input checking)
				{

				$pageID = $_GET['pageID'];
				$photoPlace = $_GET['photoPlace'];

				if(!isset($_POST['addNewPhoto']))  //if form is not submitted
				{
					//if pageID and photoPlace is set, display form to upload new photo to edit.
					//start html
					?>
					
					<!-- display form NEEDS CSS-->
					<div class='container' id="err">
						<div class="main-form">
							<?php echo "<form action='updatePhoto.php?pageID=$pageID&photoPlace=$photoPlace' method='post' enctype='multipart/form-data'>" ?>
								<h1>Update Photo</h1>
								<div class='form-el'>
									<label for='newPhoto'>Upload New Photo: </label> 
									<input id='newPhoto' type="file" name="newPhoto"/>
								</div>
								<button type="submit" value="addNewPhoto" name="addNewPhoto" class='home-button'>Submit</button>
							</form>
						</div>
					</div>
			
					<?php
					//end html
				}

				else if(isset($_POST['addNewPhoto'])){  //if the form is successfully submitted

					if (!empty($_FILES['newPhoto'])) {  //if new photo is successfully uploaded

						$pageID = $_GET['pageID'];
						$photoPlace = $_GET['photoPlace'];
						$newPhoto = $_FILES['newPhoto'];
						$originalName = $newPhoto['name'];

						//retrieve path of original photo to place new photo in same directory
						require_once '../includes/config.php';
						$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

						if ($mysqli->connect_error) {
						    die("Connection failed: " . $mysqli->connect_error);
						}

						//get photoID of original photo
						$SQLoriginalPhotoID = $mysqli -> query("SELECT photoID FROM photosInPage WHERE pageID = $pageID AND photoPlace = $photoPlace");

						while($row = $SQLoriginalPhotoID -> fetch_assoc()){
							$originalPhotoID = (int)$row['photoID'];
						}

						//using photoID of original photo, get path of original photo
						$SQLoriginalPhotoPath = $mysqli -> query("SELECT path FROM photos WHERE photoID = $originalPhotoID");

						while($row = $SQLoriginalPhotoPath -> fetch_assoc()){
							$originalPhotoPath = $row['path'];
						}

						//change to relative path from /FP/content/pages since this is where updatePhoto.php is located
						$start = stripos($originalPhotoPath, "/FP");
						$end = strripos($originalPhotoPath, "/");
    					$originalPhotoPath = "../../".substr($originalPhotoPath, $start + 4, $end - $start - 3);

						$targetPath = $originalPhotoPath.$originalName;  //final relative location of new photo
						$SQLpathEntry = str_replace("../../", "/FP/", $targetPath);  //absolute path of new photo to be inserted into database (starts with /FP)

						$imageFileType = pathinfo($targetPath,PATHINFO_EXTENSION);

						// Check if file already exists
						if (file_exists($targetPath)) {
						   print("<div class='container' id='err'>");
						   print("<p class='alert'>That file already exists. Please rename the file and try again.</p>");
						   print("</div>");
						    exit();
						}

						// Allow certain file formats only (jpg, png, gif, jpeg)
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
						    print("<div class='container' id='err'>");
						    print("<p class='alert'>Only JPG, JPEG, PNG & GIF files are allowed.</p>");
						    print("</div>");
						    exit();
						}

						// If there are no further errors
						if ($newPhoto['error'] == 0) {

							$tempName = $newPhoto['tmp_name'];
							move_uploaded_file($tempName, $targetPath);
							print("<div class='container' id='err'>");
							print("<p class='alert'>The file '$originalName' was uploaded successfully.</p>");
							print("</div>");

							require_once '../includes/config.php';
							$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

							if ($mysqli->connect_error) {
							    die("Connection failed: " . $mysqli->connect_error);
							}

							//adding uploaded photo to photos table
							if ($mysqli -> query("INSERT INTO photos (path) VALUES ('$SQLpathEntry');") === TRUE) {
							    print("<div class='container' id='err'>");
							    print('<p class="alert">The new photo has been succesfully added to the photos table.</p>');
							    print("</div>"); 
							}
							else {
							    echo "Error: " . $sql . "<br>" . $mysqli->error;
							}

							//updating entry in photosInPage table

							$SQLnewPhotoID = $mysqli -> query("SELECT photoID FROM photos WHERE path = '$SQLpathEntry'");  //first find photoID of newly uploaded photo

							while($row = $SQLnewPhotoID -> fetch_assoc()){
								$newPhotoID = (int)$row['photoID'];
							}

							//updating entry in photosInPage with new photoID
							if ($mysqli -> query("UPDATE photosInPage SET photoID = $newPhotoID WHERE pageID = $pageID AND photoPlace = $photoPlace") === TRUE) {
							    print("<div class='container' id='err'>");
							    print('<p class="alert">The new photo has been succesfully added to the photosInPage table.</p>');
							    print("</div>");
							}
							else {
							    echo "Error: " . $sql . "<br>" . $mysqli->error;
							}

						}
					}

					else {  //if new photo is not successfully uploaded
						print("<div class='container' id='err'>");
						print("<p class='alert'>Error: photo not successfully uploaded.</p>");
						print("</div>");
						exit();
					}
				}

				else{  //if pageID and photoID is not set in URL
					print("<div class='container' id='err'>");
					print("<p class='alert'>Please select a photo to replace.</p>");
					print("</div>");
				}
			}
		}
			
		else{  //if not logged in
			print("<div class='container' id='err'>");
			print("<p class='alert'>You must be <a href='login.php'>logged in</a> and select a photo to replace.</p>");
			print("</div>");
		}

		// include("../../content/includes/footer.php");
		?>
	</body>
</html>