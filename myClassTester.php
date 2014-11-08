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
$retVal = $user->userLogin("admin", "kanash1d0!");
if($retVal == 0)
{
    echo "Works!";
}
else
{
    echo "Uhoh!";
}