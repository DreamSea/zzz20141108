<?php
/**
 * Created by IntelliJ IDEA.
 * User: david
 * Date: 11/8/14
 * Time: 4:28 PM
 */
$m = new MongoClient();
$db = $m->selectDB("mydb");
    /*
     * Checks if a given user has entered the correct information.
     */
    function authenticateUser($enteredName , $enteredPass) {
        // Get md5 of password
        $enteredPass = md5($enteredPass);
        // check if the entered in name is an email.

        if((strpos($enteredName,"@") === False)) {
            $result = $db->collection->findOne(array("user" => $enteredName, "pass" => $enteredPass));
        }
        else {
            $result = $db->collection->findOne(array("email" => $enteredName, "pass" => $enteredPass));
        }

        if($result->count() > 0) {
            // sign in
            startSession();
            return True;
        }
        return False;
    }


?>