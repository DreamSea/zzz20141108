<?php
//Debug Statement
ini_set('display_errors', 'On');
/**
 * Created by IntelliJ IDEA.
 * User: Elernisto
 * Date: 11/8/14
 * Time: 3:46 PM
 */
include "Classes/user.php";

$user = new user();
$retVal = $user->registerUser("bla2", "bla2", "elernisto@gmail.com");
if($retVal == 0)
{
    echo "Works!";
}
else
{
    echo "Uhoh!";
}