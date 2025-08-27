<?php
 if ($_POST) {
    $qu1z1 = $_POST['qu1z1'];
    $ass1gn1 = $_POST['ass1gn1'];
    $ex4m1 = $_POST['ex4m1'];
   
    if (is_numeric($qu1z1) && is_numeric($ass1gn1) && is_numeric($ex4m1) &&
        $qu1z1 >= 0 && $qu1z1 <= 100 &&
        $ass1gn1 >= 0 && $ass1gn1 <= 100 &&
        $ex4m1 >= 0 && $ex4m1 <= 100) {
       
         $result = ($qu1z1 * 0.3) + ($ass1gn1 * 0.3) + ($ex4m1 * 0.4);
    if ($result >= 90) {
            $letter = "A";
        } elseif ($result >= 80) {
            $letter = "B";
        } elseif ($result >= 70) {
            $letter = "C";
        } elseif ($result >= 60) {
            $letter = "D";
        } else {
            $letter = "F";
        }
   
       


    echo "<p class='result'>Final Grade: " . round($result, 2) . " (Letter Grade: $letter)</p>";


    } else {
        echo "<p class='result' style='color:red;'>Invalid input. Please enter numbers between 0 and 100.</p>";
    }
}
?>