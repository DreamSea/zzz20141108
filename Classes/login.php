<?php
/**
 * Created by IntelliJ IDEA.
 * User: david
 * Date: 11/8/15
 * Time: 4:28 PM
 */
//$m = new MongoClient()h;
// The current database
//$db = $m->selectDB("mydb");


    /*
     * This handles the user log in.
     */
    function authenticateUser() {
        // Check if the email or username and password combo is correct.
        $enteredName = $_POST('username');
        $enteredPass = $_POST('password');
        if(empty($enteredName) ||empty($enteredPass) ) {
            // Should probably send an error.
            return false;
        }
        if(!(strpos($enteredName,"@") === False)) {
            // user has entered an email
            // error handling.
            return false;
        }
        return userLogin($enteredName,$enteredPass);
    }

    /*
     * Adds a user to the database
     */
    function signup($enteredName,$enteredEmail,$enteredPass1,$enteredPass2) {
        // ensure the password and password confirmation are equal to each other.
    }

    /*
     * Starts the session for the user
     */
    function startSession() {
    }

    /*
     * Logs a user out of their session.
     */
    function signout() {
    }

?>
