<?php
// Tinitingnan kung may sinasabmit na data sa form.
 if ($_POST) {
    $qviz = $_POST['qviz'];
    $assignm3nt = $_POST['assignm3nt'];
    $ex4m = $_POST['ex4m'];

   // tinitignan kung valid ang inputs: dapat nasa  0 - 100 lang.
    if (is_numeric($qviz) && is_numeric($assignm3nt) && is_numeric($ex4m) &&
        $qviz >= 0 && $qviz <= 100 &&
        $assignm3nt >= 0 && $assignm3nt <= 100 &&
        $ex4m >= 0 && $ex4m <= 100) {
       
    // kinokompute ang mga scores.
         $result = ($qviz * 0.3) + ($assignm3nt * 0.3) + ($ex4m * 0.4);

    // dito makikita ang average at kung pasado ba.
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

    //dito lumalabas ang final grade at kung ano ang letter.
    echo "<p class='result'>Final Grade: " . round($result, 2) . " (Letter Grade: $letter)</p>";
      
    //kapag mali ang nilagay.
    } else {
        echo "<p class='result' style='color:red;'>Invalid input. Please enter numbers between 0 and 100.</p>";
    }
}
?>