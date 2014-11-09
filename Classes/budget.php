<?php

/**
 * Created by IntelliJ IDEA.
 * User: Elernisto
 * Date: 11/8/14
 * Time: 7:17 PM
 */
class budget
{
    private $data;
    private $con;
    private $db;
    private $budgetCollection;

    function __construct()
    {
        $this->con = new MongoClient();
        $this->db = $this->con->mydb;
        $this->budgetCollection = $this->db->budgets;
    }

    function selectBudget($user, $budget)
    {
        $budgetQuery = array("user" => $user, "budget" => $budget);
        $budgetCursor = $this->budgetCollection->find($budgetQuery);
        if ($budgetCursor->hasNext()) {
            $this->data = $budgetCursor->getNext();
            return 0;
        } else {
            return -1;
        }
    }

    function newBudget($user, $budget, $incomesPerMonth, $incomeAmount)
    {
        $budgetQueryCheck = array("user" => $user, "budget" => $budget);
        $budgetCursorCheck = $this->budgetCollection->find($budgetQueryCheck);
        if ($budgetCursorCheck . hasNext()) {
            return -1;
        } else {
            $budgetQueryInsert = array("user" => $user, "budget" => $budget, "incomesPerMonth" => $incomesPerMonth,
                "incomeAmount" => $incomeAmount);
            $budgetCursorInsert = $this->budgetCollection->insert($budgetQueryInsert);
            $this->data = $budgetQueryInsert;
        }
    }

    function countCategoryPercentages()
    {
        $percent = 0;
        if ($this->data["categories"]) {
            foreach ($this->data["categories"] as $category) {
                $percent = $percent + $category["percent"];
            }
            return $percent;
        } else
            return 0;
    }

    function newCategory($category, $percent, $color)
    {
        if ($this->data) {
        } else {
            //Select/Create a budget first!
            return -2;
        }
        $categoryCheckQuery = array("user" => $this->data["user"], "budget" => $this->data["budget"], "category" => $category);
        $categoryCheckCursor = $this->budgetCollection->find($categoryCheckQuery);
        if ($categoryCheckCursor->hasNext()) {
            return -1;
        } else {
            if ($this->data["categories"]) {
                $i = count($this->data["categories"]);
                $this->data["categories"][$i]["category"] = $category;
                $this->data["categories"][$i]["percent"] = $percent;
                $this->data["categories"][$i]["color"] = $color;
            } else {
                $this->data["categories"][0]["category"] = $category;
                $this->data["categories"][0]["percent"] = $percent;
                $this->data["categories"][0]["color"] = $color;
            }
            $this->budgetCollection->update(array("name" => $this->data["name"], "budget" => $this->data["budget"]), $this->data);
            return 0;
        }
    }

    function listCategories()
    {
        return $this->data["categories"];
    }

    function deleteCategoryByIndex($index)
    {
        unset($this->data["categories"][$index]);
        $this->budgetCollection->update(array("name" => $this->data["name"], "budget" => $this->data["budget"]), $this->data);
        $this->selectBudget($this->data["user"], $this->data["budget"]);
    }

    function countCategoryBudgetItemCosts($category)
    {
        $cost = 0;
        if ($this->data["budgetItems"]) {
            foreach ($this->data["budgetItems"] as $budgetItem) {
                if($budgetItem["category"] == $category)
                {
                    $cost += $budgetItem["price"];
                }
            }
            return $cost;
        } else
            return 0;
    }

    function newBudgetItem($category, $budgetItem, $price, $description)
    {
        if ($this->data) {
        } else {
            //Select/Create a budget first!
            return -2;
        }

        if ($this->data["budgetItems"]) {
            $i = count($this->data["budgetItems"]);
            $this->data["budgetItems"][$i]["category"] = $category;
            $this->data["budgetItems"][$i]["budgetItem"] = $budgetItem;
            $this->data["budgetItems"][$i]["price"] = $price;
            $this->data["budgetItems"][$i]["description"] = $description;
        } else {
            $this->data["budgetItems"][0]["category"] = $category;
            $this->data["budgetItems"][0]["budgetItem"] = $budgetItem;
            $this->data["budgetItems"][0]["price"] = $price;
            $this->data["budgetItems"][0]["description"] = $description;
        }
        $this->budgetCollection->update(array("name" => $this->data["name"], "budget" => $this->data["budget"]), $this->data);
        return 0;

    }

    function listBudgetItems()
    {
        return $this->data["budgetItems"];
    }

    function deleteBudgetItemByIndex($index)
    {
        unset($this->data["budgetItems"][$index]);
        $this->budgetCollection->update(array("name" => $this->data["name"], "budget" => $this->data["budget"]), $this->data);
        $this->selectBudget($this->data["user"], $this->data["budget"]);
    }
}