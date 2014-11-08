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
		alert("test");
	});
	$("#login").click(function(){
		var email = $("#email").val();
		var password = $("#password").val();
		// Checking for blank fields.
		if( email =='' || password ==''){
			$('input[type="text"],input[type="password"]').css("border","2px solid red");
			$('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
			alert("Please fill all fields.");
		} else {
			$.post("login.php",{ email1: email, password1:password}, function(data){
				if(data=='Bad Email') {
					$('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
					$('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
					alert("Bad Email");
				} else if (data=='Bad Email/Password Combination'){
					$('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
					alert("Bad Combination");
				} else if (data=='Success'){
					$("form")[0].reset();
					$('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
					alert("Success");
				} else {
					alert("Not Connected?");
					$('input[type="text"],input[type="password"]').css({"border":"2px solid #000000","box-shadow":"none"});
					<!--$('input[type="text"],input[type="password"]').css("border":"medium none color", "box-shadow":"none");-->
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