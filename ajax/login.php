<!-- based from http://www.formget.com/jquery-login-form/ -->
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<body>

<div class="normalSection">
	<div class="sectionContainer">
		<form class="form" method="post" action="../Controllers/loginAction.php">
			<h2>Login Form</h2><br>
			<table>
				<tr>
					<th class="inputDesc">Email</th>
					<td><input class = "inputField" type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<th class="inputDesc">Password</th>
					<td><input class = "inputField" type="password" name="password" id="password"></td>
				</tr>
			</table><br>
			<div class = "formButton"><input type="button" name="login" id="login" value="Login"></div>
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
					alert("empy email/password check passed");
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