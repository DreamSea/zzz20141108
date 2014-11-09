<!DOCTYPE html>
<html>
<head>
    <title>Guest Navigation</title>
</head>
<body>
    <a class="infoButton">Info</a><br>
    <a class="loginButton">Login</a><br>
    <a class="registrationButton">Registration</a>

    <script
        src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('.infoButton').click(function(){
            $( "section" ).load( "ajax/guestInfo.php");
        });

        $('.loginButton').click(function(){
            $( "section" ).load( "ajax/login.php");
        });

        $('.registrationButton').click(function(){
            $( "section" ).load( "ajax/registration.php");
        });
    </script>
</body>
</html>