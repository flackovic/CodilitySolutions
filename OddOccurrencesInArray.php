<?php
// URL: https://codility.com/programmers/lessons/2-arrays/odd_occurrences_in_array/

function solution(Array $arr) {

    foreach(array_count_values($arr) as $value => $count) {
        if($count == 1) {
            return $value;
        }
    }

    return false;

}

function solutionTest() {
    $example = [9, 3, 9, 3, 9, 7, 9];

    return solution($example) === 7;
}


?>
