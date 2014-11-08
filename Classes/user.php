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
        if($Cursor->hasNext())
        {
            $this->data = $Cursor->getNext();
            return 0;
        }
        else{
            return -1;
        }

    }
}