<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css\style.css">
<body>
<nav>
	<div id="navTitle">
		<h1>Budget Pi</h1>
	</div>
	<div id="navContent">

	</div>
</nav>

	<section>
	</section>
</body>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$( "#navContent" ).load( "ajax/guestNav.php");
	$( "section" ).load( "ajax/guestInfo.php");
</script>
</html>