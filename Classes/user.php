<?php
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
    private $userCol;

/*Function Declarations*/
    function __construct()
    {
        $this->con = new MongoClient();
        $this->db = $this->con->mydb;
        $this->$userCol = $this->db->users;
    }
    function userLogin($name, $pass)
    {
        $passHash = hash("sha256", $pass);
        $userQuery = array("user" => $name, "pass" => $passHash);
        $this->userCol
        if($userQuery->hasNext())
        {
            return 0;
        }

    }
}