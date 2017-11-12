<?php

abstract class Test {

	protected $testCases;


	public function runTests() {

		foreach ($this->testCases as $num => $case) {
			
			if($this->solution($case['input']) !== $case['expected']) {
				echo "Test ".$num." failed!".PHP_EOL;
				return false;
			}

			echo "All tests passed!".PHP_EOL;
			return true;
		}
	}

	abstract function solution(Array $arr);
}





?>