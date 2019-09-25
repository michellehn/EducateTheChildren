function fail() {

}

function checkForm(form){
	if(this.username.value == ''){
		alert("Please enter a full name!");
		#this.username.focus();
		return false;
	}
	else if (this.email.value == '' || fail(this.email)){
		alert("Please enter an email!");
		this.username.focus();
	}

}