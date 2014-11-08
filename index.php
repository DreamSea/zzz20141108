<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css\style.css">
<body>
	<header>
		<h1>Stuff</h1>
	</header>

	<nav>
		<a class="loginButton">Login/Registration</a><br> More Stuff<br>
	</nav>

	<div class="whatisthis">
		<p>div whatisthistop</p>
		<section>
			<h3>More More Stuff</h3>
			<p>More More More Stuff</p>
		</section>
		<p>div whatisthisend</p>
	</div>
	<!-- end of div class whatisthis -->

	<div id="testid">
		<p>div test</p>
	</div>
	<!-- end of div testid -->
</body>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	//Cancel click event
	$('.loginButton').click(function(){
		$( "#testid" ).load( "ajax/login.php", function(responseTxt,statusTxt,xhr){
	    if(statusTxt=="success")
	      alert("External content loaded successfully!");
	    if(statusTxt=="error")
	      alert("Error: "+xhr.status+": "+xhr.statusText);
		});
	});

	// Hover shim for Internet Explorer 6 and Internet Explorer 7.
	$(document.body).on('hover','a',function(){
	    $(this).toggleClass('hover');
	});
</script>

</html>