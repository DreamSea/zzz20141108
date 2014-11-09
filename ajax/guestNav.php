<!DOCTYPE html>
<html>
<head>
    <title>Guest Navigation</title>
</head>
<body>
    <table class="hoverTable">
        <tr id="trInfo"><th>Info</th></tr>
        <tr id="trLogin"><th>Login</th></tr>
        <tr id="trRegistration"><th>Registration</th></tr>
    </table>

    <script
        src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('#trInfo').click(function(){
            $( "section" ).load( "ajax/guestInfo.php");
        })

        $('#trLogin').click(function(){
            $( "section" ).load( "ajax/login.php");
        });

        $('#trRegistration').click(function(){
            $( "section" ).load( "ajax/registration.php");
        });
    </script>
</body>
</html>