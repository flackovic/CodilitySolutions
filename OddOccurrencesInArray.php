<?php
// URL: https://codility.com/programmers/lessons/2-arrays/odd_occurrences_in_array/
require_once('Test.php');


class OddOccurencesInArray extends Test {


	public function __construct() {

		$this->testCases = array(
			[
				'input' => [9, 3, 9, 3, 9, 7, 9],
				'expected' => 7
			], [
				'input' => [1, 1, 1, 4], 
				'expected' => 4
			], [
				'input' => [1], 
				'expected' => 1
			], [
				'input' => [-1, -1, 5, 4, 4, 0, 0], 
				'expected' => 5
			]);
	}


	public function solution(Array $arr) {

		$valuesCount = array();

		// Count values occurences
		foreach($arr as $value) {
			if(!isset($valuesCount[$value])) {
				$valuesCount[$value] = 1;
			} else {
				$valuesCount[$value]++;
			}
		}

		// return value that occurs only once
		foreach($valuesCount as $value => $count) {
			if($count == 1) {
				return $value;
			}
		}

		return false;

	}

}



(new OddOccurencesInArray)->runTests();
?>
