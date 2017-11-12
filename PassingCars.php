<?php
// URL: https://codility.com/programmers/lessons/5-prefix_sums/passing_cars/


function solution($A) {

    $total = 0;

    foreach($A as $pos => $car) {
        if($car == 0) {
            // save time skipping everything behind that car by setting starting posx = pos
            for($posx = $pos; $posx < count($A); $posx++) {
                if($A[$posx] == 1) {
                    $total++;
                }
            }

        }
    }

    return $total;
}


function solutionTest() {
    $example = [0, 1, 0, 1, 1];

    return solution($example) == 5;
}


?>
