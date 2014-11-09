<?php
/**
 * Created by IntelliJ IDEA.
 * User: david
 * Date: 11/8/14
 * Time: 11:59 PM
 */
require_once "./budget.php";
    /*
     * selectBudget
     */
    function select_budget() {
        $enteredUser = $_POST("username");
        $enteredBudget = $_POST("budget");

        if(empty($enteredUser) || empty($enteredBudget)) {
            return False;
        }

        if(!(is_numeric($enteredBudget))) {
            return False;
        }
        return selectBudget($enteredUser,$enteredBudget);
    }

    function newBudget() {
        $enteredUser = $_POST("username");
        $enteredBudget = $_POST("budget");
        $enteredIncome = $_POST("incomesPerMonth");
        $enteredAmount = $_POST("incomeAmount");
        if(empty($enteredUser) || empty($enteredBudget)
                || empty($enteredIncome)|| empty($enteredAmount)) {
            return False;
        }

        if(!(is_numeric($enteredBudget)) || !is_numeric($enteredIncome)
                || !is_numeric($enteredAmount)) {
            return False;
        }

        return newBudget($enteredUser,$enteredBudget,$enteredIncome,$enteredAmount);
    }


    function newCategory() {
        $budget = new budget();
        $enteredCategory = $_POST("category");
        $enteredPercent =  $_POST("percent");
        $enteredColor = $_POST("color");
        if(!is_numeric($enteredPercent)) {
            // error
            return False;
        }

        if(empty($enteredCategory) || empty($enteredPercent) || empty($enteredColor)) {
            // error
            return False;
        }

        return newCategory($enteredCategory, $enteredPercent,$enteredColor);
    }

    function searchBudget() {
        $enteredCategory = $_POST("category");
        $startDate = $_POST("startDate");
        $endDate = $_POST("endDate");
    }
?>
