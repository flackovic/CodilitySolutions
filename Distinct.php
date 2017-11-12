<?php
// URL: https://codility.com/programmers/lessons/6-sorting/distinct/


function solution(Array $arr) {
	$uniques = array();

	foreach($arr as $value) {
		if(!in_array($value, $uniques)) {
			$uniques[] = $value;
		}
	}

	return count($uniques);
}


function solutionTest() {
	$tests = array(
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
    
    foreach($tests as $num => $test) {
    	if(solution($test['input']) !== $test['expected']) {
    		echo "Test ".$num." failed!".PHP_EOL;
    		return false;
    	}
    }
    
    echo "All tests passed!".PHP_EOL;
    return true;
}

solutionTest();

?>
