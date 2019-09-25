<?php session_start(); ?>
<!DOCTYPE html>
<html> 
<head>
        <title>Contact Us | Educate the Children</title>
   		<?php include "../../content/includes/header.php"; ?>
</head>

<body id="contact-body">
	<?php include "../../content/includes/nav.php"; ?>

	<!--Login Form-->
	<div class='container'>
		<div class="main-form">
			<form method="post">
				<h1>Contact Us!</h1>
				<div class='form-el'>
					<label for='username'>Name </label> 
					<input id ='username' type='text' name='username' required/><p id = 'name_warning'></p>
					<script type="text/javascript">
					var name_input = document.getElementById('username');
					var re = /^[a-zA-Z\s]*$/;
					var re2 = /^[\s]*$/;
					name_input.onblur = function(){
						document.getElementById('submit').style.visibility = 'hidden';
						if (name_input.value == ''){
							document.getElementById('name_warning').innerHTML = "Please type in a name";

						}
						else if(!re.test(name_input.value)){
							document.getElementById('name_warning').innerHTML = "Name can only contain letters and spaces";
						}
						else if(re2.test(name_input.value)){
							document.getElementById('name_warning').innerHTML = "Name must contain letters";
						}
						else{
							document.getElementById('name_warning').innerHTML = "";
							if (document.getElementById('name_warning').innerHTML == "" && document.getElementById('email_warning').innerHTML == "" && document.getElementById('org_warning').innerHTML == "" && document.getElementById('message_warning').innerHTML == "" ){
								document.getElementById('submit').style.visibility = 'visible';
							}
							else{
								document.getElementById('submit').style.visibility = 'hidden';
							}
						}						
					}
					</script>
				</div>
				<div class='form-el'>
					<label for='email'>Email </label> 
					<input id ='email' type='text' name='email' required/><p id = 'email_warning'></p>
					<script type="text/javascript">
					var email_input = document.getElementById('email');
					var re4 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					email_input.onblur = function(){
						document.getElementById('submit').style.visibility = 'hidden';
						if (email_input.value == ''){
							document.getElementById('email_warning').innerHTML = "Please type in an email";
						}
						else if(!re4.test(email_input.value)){
							document.getElementById('email_warning').innerHTML = "Please enter a valid email";
						}
						else{
							document.getElementById('email_warning').innerHTML = "";
							if (document.getElementById('name_warning').innerHTML == "" && document.getElementById('email_warning').innerHTML == "" && document.getElementById('org_warning').innerHTML == "" && document.getElementById('message_warning').innerHTML == "" ){
								document.getElementById('submit').style.visibility = 'visible';
							}
							else{
								document.getElementById('submit').style.visibility = 'hidden';
							}
						}
					}
					</script>
				</div>
				<div class='form-el'>
					<label for='org'>Organization </label> 
					<input id ='org' type='text' name='org' required/><p id = 'org_warning'></p>
					<script type="text/javascript">
					var org_input = document.getElementById('org');
					var re5 = /^[a-zA-Z':,\-!?()."&\s]*$/;
					var re6 = /^[':,\-!?()."&\s]*$/;
					org_input.onblur = function(){
						document.getElementById('submit').style.visibility = 'hidden';
						if (org_input.value == ''){
							document.getElementById('org_warning').innerHTML = "Please type in an organization";
						}
						else if(!re5.test(org_input.value)){
							document.getElementById('org_warning').innerHTML = "Please enter a valid organization name";
						}
						else if(re6.test(org_input.value)){
							document.getElementById('org_warning').innerHTML = "Organization name must contain letters";
						}
						else{
							document.getElementById('org_warning').innerHTML = "";
							if (document.getElementById('name_warning').innerHTML == "" && document.getElementById('email_warning').innerHTML == "" && document.getElementById('org_warning').innerHTML == "" && document.getElementById('message_warning').innerHTML == "" ){
								document.getElementById('submit').style.visibility = 'visible';
							}
							else{
								document.getElementById('submit').style.visibility = 'hidden';
							}							
						}						
					}
					</script>					
				</div>
				<div class='form-el'>
					<label for='msg'>Message </label> 
					<textarea id ='msg' name='msg' required></textarea><p id = 'message_warning'></p>
					<script type="text/javascript">
					var msg_input = document.getElementById('msg');
					var re7 = /^[a-zA-Z':,\-!?()."&$#%^_|*\s]*$/;
					var re8 = /^[':,\-!?()."&$#%^_|*\s]*$/;
					msg_input.onblur = function(){
						document.getElementById('submit').style.visibility = 'hidden';
						console.log(msg_input.value);
						if (msg_input.value == ''){

							document.getElementById('message_warning').innerHTML = "Please type in a message";
						}
						else if(!re7.test(msg_input.value)){
							document.getElementById('message_warning').innerHTML = "Please enter a valid message";
						}		
						else if(re8.test(msg_input.value)){
							document.getElementById('message_warning').innerHTML = "Message must contain letters";
						}
						else{
							document.getElementById('message_warning').innerHTML = "";
							if (document.getElementById('name_warning').innerHTML == "" && document.getElementById('email_warning').innerHTML == "" && document.getElementById('org_warning').innerHTML == "" && document.getElementById('message_warning').innerHTML == "" ){
								document.getElementById('submit').style.visibility = 'visible';
							}
							else{
								document.getElementById('submit').style.visibility = 'hidden';
							}							
						}					
					}
					</script>					
				</div>
				<button type="submit" id = "submit" value="Submit" name="submit" class='home-button'>Send</button>
			</form>
		</div>
	</div>
	<?php include("../../content/includes/footer.php"); ?>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['org']) && !empty($_POST['msg'])){
			if (isset($_POST['username']) && preg_match("/^[A-z0-9; *]+$/", $_POST['username']) && strlen(trim($_POST['username']))<500
				&& isset($_POST['email']) && preg_match("/^[A-z0-9;@!,\.\-\$\#()' *]+$/", $_POST['email']) && strlen(trim($_POST['email']))<500
				&& isset($_POST['org']) && preg_match("/^[A-z0-9;!,\.\-\$\#()' *]+$/", $_POST['org']) && strlen(trim($_POST['org']))<500
				&& isset($_POST['msg']) && preg_match("/^[A-z0-9;!,\.\-\$\#()' *]+$/", $_POST['msg']) && strlen(trim($_POST['msg']))<20000){
			
				$username =strip_tags(htmlentities($_POST['username']));
				$email =strip_tags(htmlentities($_POST['email']));
				$org =strip_tags(htmlentities($_POST['org']));
				$msg =strip_tags(htmlentities($_POST['msg']));
				mail("educate@mos.com.np",$username." ".$org, $email ." \n".$msg);
				echo $username;
				echo $username . $org;
				echo "Message sent";
			}
		}
		else{
			echo "Please fill in all required fields";
		}
	}

?>
<!-- PHP pseudo code
	
	$x =strip_tags(htmlentities($_POST['x'])); for each inputted variables to validate 	
											  the inputs
	mail('user@example.com', 'name + company', 'email + message'); Use this function to 
																   mail the message and
																   info to user.
	echo "Message received"; If message was valid and successfully sent.
-->
