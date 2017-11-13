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
				'input' => [1, 1, 4],
				'expected' => 4
			], [
				'input' => [1, 1, 1],
				'expected' => 1
			], [
				'input' => [1, 1, 1, 1, 9],
				'expected' => 9
			], [
				'input' => [1],
				'expected' => 1
			], [
				'input' => [-1, -1, 5, 4, 4, 0, 0],
				'expected' => 5
			]);
	}


	public function solution(Array $arr) {

		$valuesFound = array();

		// Push values to temp array - unset value if pair is found (reset state)
		foreach($arr as $value) {
			if(!in_array($value, $valuesFound)) {
				$valuesFound[] = $value;
			} else {
				$key = array_search($value, $valuesFound);
				unset($valuesFound[$key]);
			}
		}

		/*
		 * Reindex array and return first element.
		 * This will fail if input has all paired values, but as stated in challenge
		 * we can "assume all but one of the values in A occur an even number of times."
		 */
		return array_values($valuesFound)[0];

	}

}



(new OddOccurencesInArray)->runTests();
?>
