<?php
/**
 * Created by IntelliJ IDEA.
 * User: David
 * Date: 11/8/15
 * Time: 4:28 PM
 */

// include the user class
require "user.php";

    /*
     * This handles the user log in. */
    function authenticateUser() {
        // Check if the email or username and password combo is correct.
        $enteredName = $_POST('email');
        $enteredPass = $_POST('password');
        if(empty($enteredName) ||empty($enteredPass) ) {
            // Should probably send an error.
            alert()

            return False;
        }
        if((strpos($enteredName,"@") === False)) {
            // user has not entered a password.
            // error handling.
            return False;
        }
        return userLogin($enteredName,$enteredPass);
    }

    /*
     * Adds a user to the database
     */
    function signup() {
        // ensure the password and password confirmation are equal to each other.
        $enteredName = $_POST('email');
        $enteredPass1 = $_POST('password1');
        $enteredPass2 = $_POST('password2');
        // check that passwords are the same.
        if(!($enteredPass1 === $enteredPass2)) {
            // Should show an error.
            return False;
        }
        if(!(strpos($enteredName,'@') === False)) {
            // Should tell user that email was wrong
            // Should also check that it's a valid domain.
            return False;
        }
        // create the user.
        return true;
    }

    /*
     * Starts the session for the user
     */
    function startSession() {
        // Not sure how do do this
    }

    /*
     * Logs a user out of their session.
     */
    function signout() {
        // Also not sure how to do this.
    }

?>
