<?php
    /**
     * First utilisation of php
     * Using function for time
     * @param $timestamp
     */
    
    function longDate($timestamp) {
      return date("j M Y", $timestamp);
    }

    function stringDate($timestamp) {
      $temp = date("j M Y", $timestamp);
      return "Actual time $temp";
    }

    echo longDate(time());
    echo stringDate(time());
?>

<?php

    /**
     * First utilisation of php
     * Using function with static
     * @param $timestamp
     */

     $time = 2;

     function test() {
       static $counter = 0;
       echo $counter;
       $counter++;
     }

     if ($time == 2) {
       test();
     }
?>