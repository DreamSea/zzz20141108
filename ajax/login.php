<!-- based from http://www.formget.com/jquery-login-form/ -->
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
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
				<input type="button" name="login" id="login" value="Login">
			</form>
		</div>
	</div>

	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
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
</body>
</html>