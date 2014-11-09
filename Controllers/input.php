<?php

/*
 *
 * User: David
 * 11/08/2014
 *
 * This controls the various functions, it is what will direct the displaying of the charts and what not.
 */
include("../Classes/budgetfunctions.php");
  /*
   */
  function data_input() {
      $category = $_POST("category");
      $totalCost = $_POST("totalCost");
      $startDate = $_POST("startDate");
      $endDate = $_POST("endDate");
      if(empty($category) || empty($totalCost) || empty($startDate) || empty($endDate)) {
          // Error, some fields were left blank.
          return False;
      }

      if(!is_numeric(totalCost)) {
          // Error. Total Cost wasn't numeric.
          return False;
      }

  }

  function  generateChartData($budget) {
      // budget get, needs to be implemented in model.
      // Select this budget
      $budget = new budget();
      // calculate what free percentage it will be.
      $freepercent = 1 - countCategoryPercentages();
      $budget.newBudgetItem($freepercent, "#006660","Unused Money","#ffffff");
      $categories = $budget.listCategories();
      $count = count($categories);
      for($i = 0; $i < $count; $i++) {
          data_transform($categories[$i]["percent"],$categories[$i]["category"],$categories[$i]["color"]);
          if($i + 1 < $count) {
              echo ',\n';
          }
      }
  }
  /*
   * Transforms the four values into a data entry for the pie chart.
   */
  function data_transform($value, $color,$label, $highlight="#000000")
  {
    echo "{";
    echo "value: ". $value.",\n";
    echo "color: ". $color.",\n";
    echo "highight: ". $highlight.",\n";
    echo "label: ". $label. "\n";
    echo "}\n";
  }

?>