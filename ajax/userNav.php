<!DOCTYPE html>
<html>
<head>
	<title>User Navigation</title>
</head>
<body>
	Username: <br>
	<label id="user"></label><br><br>
	<a class="overviewButton">Overview</a><br>
	<a class="searchDataButton">Search</a><br>
	<a class="addDataButton">Add Data</a><br>
	<a class="loanButton">Loan Calculator</a><br>
	<a class="logoutButton">Logout</a><br>

	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>

		var username = "username placeholder";
		$("#user").text(username);
		$('.overviewButton').click(function(){
			$( "section").load( "ajax/overview.php");
		});

		$('.searchDataButton').click(function(){
			$( "section" ).load( "ajax/searchData.php");
		});

		$('.addDataButton').click(function(){
			$( "section" ).load( "ajax/addData.php");
		});

		$('.loanButton').click(function(){
			alert("loan load() placeholder");
		});

		$('.logoutButton').click(function(){
			$( "section" ).load( "ajax/guestInfo.php");
			$( "#navContent").load( "ajax/guestNav.php");
			alert("Logged Out");
		});

		// Hover shim for Internet Explorer 6 and Internet Explorer 7.
		$(document.body).on('hover','a',function(){
			$(this).toggleClass('hover');
		});
	</script>
</body>
</html>