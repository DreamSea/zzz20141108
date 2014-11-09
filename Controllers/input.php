<?php

/*
 *
 * User: David
 * 11/08/2014
 *
 * This controls the various functions, it is what will direct the displaying of the charts and what not.
 */
include("../Classes/budget.php");
  /*
   */
  function data_input() {
      $category = $_POST("category");
      $totalCost = $_POST("totalCost");
      $startDate = $_POST("startDate");j
      $endDate = $_POST("endDate");
      if(empty($category) || empty($totalCost) || empty(startDate) || empty(endDate)) {
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
      selectBudget($_SESSION['currentuser']);
      // calculate what free percentage it will be.
      $freepercent = 1 - countCategoryPercentages();
      // Need a way to get a specific category.
      // for each category:
      //    data_transform($percentage, $color, $category);
      //

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