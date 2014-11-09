<?php
/**
 * Created by IntelliJ IDEA.
 * User: David
 * Date: 11/8/15
 * Time: 4:28 PM
 */

// include the user class
require "user.php";

// Start the session
session_start();

// Does not automatically log the user in. It only keeps track of if the user
// is currently logged in.
session_set_cookie_params(0);
if(!isset($_SESSION['loggedin'])) {
    $_SESSION['loggedin'] = False;
    $_SESSION['mobile'] = False;
    $_SESSION['name'] = "";
}
    /*
     * This handles the user log in. */
    function authenticateUser() {
        // Check if the email or username and password combo is correct.
        $enteredName = $_POST('email');
        $enteredPass = $_POST('password');
        if(empty($enteredName) ||empty($enteredPass) ) {
            // Should probably send an error.
            return False;
        }
        if(!userLogin($enteredName,$enteredPass) ) {
            return False;
        }
        loadSession($enteredName);
    }


    /*$
     * Registers a user for this service.
     */
    function register() {
        $enteredName = $_POST('name');
        $enteredMail = $_POST('email');
        $enteredPass = $_POST('password1');
        $confirmPass = $_POST('confirm');

        // check if everything is valid
        if(strpos($enteredMail,'@') === False) {
            // display an error.
            return false;
        }

        if($enteredPass != $confirmPass) {
            return False;
        }

        registerUser($enteredName,$enteredPass,$enteredMail);
        loadSession($enteredName);
        return True;
    }


    /*
     * Logs a user out of their session.
     */
    function logout() {
        endSession();
        // display sign in page.
    }
    /*
     * Loads the next pages for the user.
     */
    function loadSession($name) {
        // Set user to be logged in.
        $_SESSION['loggedin'] = True;
        $_SESSION['username'] = $name;
        /*
        $_SESSION['name']= getUserData;
        $_SESSION['email'] = getUserDataEmail
        get_browser($userstring);
        $_SESSION['mobile'] = // get user agent string and compare it to somestuff.
        */
        // check if it's a
    }



    /*
     * Ends the session for the user.
     */
    function endSession() {
        $_SESSION['loggedin'] = False;
    }


?>
