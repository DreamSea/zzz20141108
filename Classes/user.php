<?php
//Debug statement.
ini_set('display_errors', 'On');
/**
 * Created by IntelliJ IDEA.
 * User: Elernisto
 * Date: 11/8/14
 * Time: 1:23 PM
 */

class user {
/*Member Declaration*/
    private $data;
    private $con;
    private $db;
    private $userCollection;

/*Function Declarations*/
    function __construct()
    {
        $this->con = new MongoClient();
        $this->db = $this->con->mydb;
        $this->userCollection = $this->db->users;
    }
    function userLogin($name, $pass)
    {
        $passHash = hash("sha256", $pass);
        $userQuery = array("user" => $name, "pass" => $passHash);
        $Cursor = $this->userCollection->find($userQuery);
        $emailQuery = array("email" => $name, "pass"=>$passHash);
        $emailCursor = $this->userCollection->find($emailQuery);
        if($Cursor->hasNext())
        {
            $this->data = $Cursor->getNext();
            return 0;
        }
        else if($emailCursor->hasNext())
        {
            $this->data = $emailCursor->getNext();
            return 0;
        }
        else{
            return -1;
        }

    }
    function getData(){return $this->data;}
    function registerUser($user, $pass, $email)
    {
        $passHash = hash("sha256", $pass);
        $userQuery = array("user"=>$user);
        $emailQuery = array("email" => $email);
        $userCursor = $this->userCollection->find($userQuery);
        $emailCursor = $this->userCollection->find($emailQuery);
        if($userCursor->hasNext())
            return -1;
        else if($emailCursor->hasNext())
            return -1;
        else
        {
            $registerQuery = array("user" => $user, "pass" => $passHash, "email"=>$email);
            $registerCursor = $this->userCollection->insert($registerQuery);
            $this->data = $registerQuery;
            return 0;
        }
    }
}