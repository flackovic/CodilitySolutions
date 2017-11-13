<?php
// URL: https://codility.com/programmers/lessons/5-prefix_sums/passing_cars/
require_once('Test.php');


class PassingCars extends Test {


    public function __construct() {

        $this->testCases = array(
            [
                'input' => [0, 1, 0, 1, 1],
                'expected' => 5
            ], [
                'input' => [1, 1, 1],
                'expected' => 0
            ], [
                'input' => [1],
                'expected' => 0
            ]);
    }


    public function solution(Array $arr) {

        $totalPasses = 0;
        $carsRight = 0;

        // Keep track of right-passing cars. If car is going left - increment total by how many cars already passed right
        foreach($arr as $car) {
            $car == 0 ? $carsRight++ : $totalPasses += $carsRight;
        }

        return $totalPasses;
    }


}


(new PassingCars)->runTests();
?>
