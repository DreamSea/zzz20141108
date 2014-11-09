<?php
//Debug Statement
//ini_set('display_errors', 'On');
/**
 * Created by IntelliJ IDEA.
 * User: Elernisto
 * Date: 11/8/14
 * Time: 3:46 PM
 */
include "Classes/user.php";
include "Classes/budget.php";

$user = new user();
$budget = new budget();
$retVal = $budget->selectBudget("admin", "daMoney", "2", "50");
if($retVal == 0)
{
    echo "Works!";
}
else
{
    echo "Uhoh!";
}

print_r($budget->listCategories());
print_r($budget->listBudgetItems());
var_dump($budget->getData());