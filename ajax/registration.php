<!-- based from http://www.formget.com/jquery-login-form/ -->
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#register").click(function(){
	    var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();
		// Checking for blank fields.
		if( email =='' || password =='' || username ==''){
			alert("Please fill all fields.");
		} else {
			$.post("registration.php",{ email1: email, password1:password, username1: username}, function(data){
				if(data=='Username Taken') {
				    alert("Username Taken");
				} else if(data=='Bad Email') {
					alert("Bad Email");
				} else if (data=='Success'){
					$("form")[0].reset();
					alert("Success");
				} else {
					alert("Not Connected?");
				}
			});
		}
	});
});
</script>
</head>
<body>
	<div class="container">
		<div class="main">
			<form class="form" method="post" action="#">
				<h2>Login Form</h2>
				<label>Username: </label>
				<input type="text" name="username" id="username"><br>
				<label>Password: </label>
				<input type="password" name="password" id="password"><br>
				<label>Email: </label>
				<input type="text" name="email" id="email"><br>
				<input type="button" name="register" id="register" value="Register">
			</form>
		</div>
	</div>
</body>
</html>