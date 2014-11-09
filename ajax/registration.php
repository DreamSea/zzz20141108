<!-- based from http://www.formget.com/jquery-login-form/ -->
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

<div class="normalSection">
	<div class="sectionContainer">
		<form class="form" method="post" action="../Controllers/registrationAction.php">
			<h2>Registration Form</h2><br>
			<table>
				<tr>
					<th class="inputDesc">Username</th>
					<td><input class = "inputField" type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<th class="inputDesc">Email</th>
					<td><input class = "inputField" type="text" name="email" id="email"></td>
				</tr>
				<tr>
					<th class="inputDesc">Password</th>
					<td><input class = "inputField" type="text" name="password" id="password"></td>
				</tr>
			</table><br>
			<div class = "formButton"><input type="button" name="register" id="register" value="Register"></div>
		</form>
	</div>
	<br>
	<a class="secretButton">How Mysterious</a>
</div>
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
					alert("First Input Check Passed");
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
		$('.secretButton').click(function(){
			$( "#navContent" ).load( "ajax/userNav.php" );
			$( "section" ).load( "ajax/overview.php" );
		});

	</script>
</body>
</html>