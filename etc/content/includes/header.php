<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (stripos($actual_link, "FP/content/pages/sub") !== false) {
		$prefix = '../../../';
	}

	else if (stripos($actual_link, "FP/content/pages") !== false) {
		$prefix = '../../';
	}

	else if (stripos($actual_link, "FP") !== false) {
		$prefix = '';
	}

	else{
		$new_link = substr($actual_link, 0, strrpos($actual_link, "FP"));
		$prefix = $new_link.'FP/';
	}

	$header = $prefix.'stylesheets/css/header.css';
	$footer = $prefix.'stylesheets/css/footer.css';
	$main = $prefix.'stylesheets/css/main.css';
	$js = $prefix.'js/script.js';
	$logoIcon = $prefix.'assets/logo-circle.png';
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<?php
	print("
		<link rel='icon' href=\"$logoIcon\">
		<link rel='stylesheet' href=\"$header\">
		<link rel='stylesheet' href=\"$footer\">
		<link rel='stylesheet' href=\"$main\">
	");
?>

<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,300,500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<?php
	print("<script src=\"$js\" async></script>");
?>