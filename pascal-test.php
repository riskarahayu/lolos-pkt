<?php
	$arr = [1];
	$array_of_string = [];
	echo '1';
	$string = '1234';
	

	var_dump($array_of_string);	

	for($x = count($arr)-1; $x >= 0; $x--) {
		if($x != 0)
			echo $arr[$x] + $arr[$x-1];
		else {
			echo 1;
		}
	}
?>