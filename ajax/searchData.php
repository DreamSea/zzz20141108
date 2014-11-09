<!DOCTYPE html>
<html>
<head>
    <title>Search Form</title>
</head>
<body>

<div class="normalSection">
    <div class="sectionContainer">
        <form class="form" method="post" action="#">
            <h2>Search Data</h2><br>
            <table>
                <tr>
                    <th class="inputDesc">Category</th>
                    <td><input class = "inputField" type="text" name="category" id="category"></td>
                </tr>
                <tr>
                    <th class="inputDesc">Start Date</th>
                    <td><input type="date" id="startDate" name="startDate"></td>
                </tr>
                <tr>
                    <th class="inputDesc">End Date</th>
                    <td><input type="date" id="endDate" name="endDate"></td>
                </tr>
            </table><br>
            <div class = "formButton"><input type="button" name="submit" id="submit" value="Submit"></div>
        </form>
    </div>
    <br>

    <div id="results">
    </div>
</div>

<script
    src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //puts current date into startDate's field
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;
        $("#startDate").attr("value", today);
        $("#endDate").attr("value", today);

        //button stuff
        $("#submit").click(function(){
            var startDate = $("#startDate").val();
            var endDate = $("#endDate").val();

            if( endDate < startDate || startDate == "" || endDate == "")
            {
                alert("Bad Input Date");
            }
            else
            {
                alert("Trying to post search "+startDate+" "+endDate);
                $( "#results" ).load( "ajax/searchResults.php", function() {
                    $("#resultsFrom").text(startDate);
                    $("#resultsTo").text(endDate);
                });

                $.post("searchData.php",{}, function(data){
                    if ( data === true )
                    {
                        alert("input true(?) okay");
                    }
                    else
                    {
                        alert("input maybe okay");
                    }
                });
            }

            /*if( email =='' || password ==''){
             alert("Please fill all fields.");
             } else {
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
             }*/
        });
    });
</script>
</body>
</html>