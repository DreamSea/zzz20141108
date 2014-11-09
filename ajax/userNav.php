<!DOCTYPE html>
<html>
<head>
	<title>User Navigation</title>
</head>
<body>
	Username: <label id="user"><label><br>
	<a class="overviewButton">Overview</a><br>
	<a class="addDataButton">Add Data</a><br>
	<a class="loanButton">Loan Calculator</a><br>
	<a class="logoutButton">Logout</a><br>
</body>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	var username = "username placeholder";
	$("#user").attr("value", username);
	$('.overviewButton').click(function(){
		alert("overview load() placeholder");
	});

	$('.addDataButton').click(function(){
		alert("addData load() placeholder");
	});

	$('.loanButton').click(function(){
		alert("loan load() placeholder");
	});
	
	$('.logoutButton').click(function(){
		alert("logout load() placeholder");
	});

	// Hover shim for Internet Explorer 6 and Internet Explorer 7.
	$(document.body).on('hover','a',function(){
	    $(this).toggleClass('hover');
	});
</script>

</html>