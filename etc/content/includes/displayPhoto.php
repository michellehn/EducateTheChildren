<?php

	//displays a photo given parameters photoPlace, the integer number identifying the vertical position of the photo,
	//id, the id to be used in the <img> tag, and alt, the alternate to be used in the <img> tag. If user is logged in
	//the photo to be displayed is displayed as a link, which redirects to updatePhoto.php, where user is prompted
	//to update the selected photo.

	//*** NEED CSS to make editable photos more apparent. For example on hover show "edit" message? (see below) ***

	function displayPhoto($photoPlace, $id, $alt){

		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$path = substr($actual_link, strripos($actual_link, "/FP/"));

		if (stripos($path, "/FP/content/pages/sub") !== false) {
			$prefix = '../../../';
		}

		else if (stripos($path, "/FP/content/pages") !== false) {
			$prefix = '../../';
		}

		else if (stripos($path, "/FP") !== false) {
			$prefix = '';
		}

		else{
			$new_link = substr($path, 0, strripos($path, "FP"));
			$prefix = $new_link.'FP/';
		}
		$cameraimg = $prefix.'assets/white-camera.png';

		require_once $prefix.'content/includes/config.php';
		$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

		if ($mysqli->connect_error) {
		    die("Connection failed: " . $mysqli->connect_error);
		}

		//hardcode pageID? maybe an option
		//retreiving the pageID of this page
		$SQLpageID = $mysqli -> query("SELECT pageID FROM pages WHERE path = '$path';");

		while($row = $SQLpageID -> fetch_assoc()){
			$pageID = $row['pageID'];
		}

		$pageID = (int)$pageID;

		//retreiving the photoID of photo to be displayed
		$SQLphotoID = $mysqli -> query("SELECT photoID FROM photosInPage WHERE pageID = $pageID AND photoPlace = $photoPlace;"); 

		while($row = $SQLphotoID -> fetch_assoc()){
			$photoID = $row['photoID'];
		}

		//retreiving the absolute path of photo to be displayed
		$SQLphotoPath = $mysqli -> query("SELECT `path` FROM photos WHERE photoID = $photoID"); 

		while($row = $SQLphotoPath -> fetch_assoc()){
			$photoPath = $row['path'];
		}

		//relative path to photo
		$src = $prefix.substr($photoPath, strripos($path, "/FP/") + 4);
		$href = $prefix."content/pages/updatePhoto.php?pageID=$pageID&photoPlace=$photoPlace";

		if (isset($_SESSION['logged_user_by_sql'])) { //if logged in

			//display photo as a link to updatePhoto.php so that it is editable.
			//NEED CSS to make link more apparent. For example on hover show "edit" message?

			echo "<a href = $href class='edit-img'><img class='container-img' src = $src id = $id alt = $alt/><img class='camera-icon' src='$cameraimg'> </a>";
		}

		else{

			//just display the image
			echo "<img class='container-img' src = $src id = $id alt = $alt/>";
		}

	}
?>