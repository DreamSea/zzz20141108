<!-- based from http://www.formget.com/jquery-login-form/ -->
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#register").click(function(){
		alert("test "+$('input[type="text"]').css("border"));
		<!--alert($('input[type="text"])');-->
	});
	$("#login").click(function(){
		var email = $("#email").val();
		var password = $("#password").val();
		// Checking for blank fields.
		if( email =='' || password ==''){
			alert("Please fill all fields.");
		} else {
			$.post("login.php",{ email1: email, password1:password}, function(data){
				if(data=='Bad Email') {
					alert("Bad Email");
				} else if (data=='Bad Email/Password Combination'){
					alert("Bad Combination");
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
				<label>Email :</label>
				<input type="text" name="email" id="email"><br>
				<label>Password :</label>
				<input type="password" name="password" id="password"><br>
				<input type="button" name="login" id="login" value="Login"><br>
				<input type="button" name="register" id="register" value="Register">
			</form>
		</div>
	</div>
</body>
</html>