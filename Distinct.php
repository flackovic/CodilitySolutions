<?php
// URL: https://codility.com/programmers/lessons/6-sorting/distinct/
require_once('Test.php');


class Distinct extends Test {


	public function __construct() {

		$this->testCases = array(
			[
				'input' => [2, 1, 1, 2, 3, 1],
				'expected' => 3
			], [
				'input' => [1, 1, 1], 
				'expected' => 1
			], [
				'input' => [1], 
				'expected' => 1
			], [
				'input' => [-1, -1, 4, 5, 6, 4, 4, 0, 0], 
				'expected' => 5
			]);
	}


	public function solution(Array $arr) {
		$uniques = array();

		// filter duplicates
		foreach($arr as $value) {
			if(!in_array($value, $uniques)) {
				$uniques[] = $value;
			}
		}

		return count($uniques);
	}
	
}



(new Distinct)->runTests();
?>
