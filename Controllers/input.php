<?php
/*
 * User: David
 * 11/08/2014
 *
 * This controls the various functions, it is what will direct the displaying of the charts and what not.
 */

 /*
  * Color chooser controller.
  * Get's the color's chosen by the user sends them to the charter.
  */
  function color_chooser() {

  }

  /*
   * Get's data from the textfields and sends it to the model.
   */
  function data_input() {
      $category = $_POST("category");
      $totalcost = $_POST("totalCost");
      $startDate = $_POST("startDate");
      $endDate = $_POST("endDate");

  }

  /*
   * Transforms the four values into a data entry for the pie chart.
   */
  function data_transform($value, $color,$label, $highlight="#000000")
  {
    echo "{";
    echo "value: ". $value;
    echo "color: ". $color;
    echo "highight: ". $highlight;
    echo "label: ". $label;
    echo "}";
  }

?>