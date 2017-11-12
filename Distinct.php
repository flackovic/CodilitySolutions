<?php
// URL: https://codility.com/programmers/lessons/6-sorting/distinct/


function solution(Array $arr) {
    return count(array_count_values($arr));
}


function solutionTest() {
    $example = [2, 1, 1, 2, 3, 1];
    return solution($example) === 3;
}


?>
