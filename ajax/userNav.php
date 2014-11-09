<!DOCTYPE html>
<html>
<head>
	<title>User Navigation</title>
</head>
<body>
	Username: <br>
	<label id="user"></label><br><br>

	<table class="hoverTable">
		<tr id="trOverview"><th>Dashboard</th></tr>
		<tr id="trSearch"><th>Search</th></tr>
		<tr id="trAdd"><th>Add Data</th></tr>
		<tr id="trLoan"><th>Loan Calculator</th></tr>
		<tr id="trLogout"><th>Logout</th></tr>
	</table>
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		var username = "username";
		$("#user").text(username);
		$('#trOverview').click(function(){
			$( "section").load( "ajax/overview.php");
		});

		$('#trSearch').click(function(){
			$( "section" ).load( "ajax/searchData.php");
		});

		$('#trAdd').click(function(){
			$( "section" ).load( "ajax/addData.php");
		});

		$('#trLoan').click(function(){
			alert("loan load() placeholder");
		});

		$('#trLogout').click(function(){
			$( "section" ).load( "ajax/guestInfo.php");
			$( "#navContent").load( "ajax/guestNav.php");
			alert("Logged Out");
		});
	</script>
</body>
</html>