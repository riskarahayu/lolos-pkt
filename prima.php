<?php

if(isset($_POST['bilangan'])) {
	$bilangan = $_POST['bilangan'];
	$prima = true;
	if($bilangan > 1) {
		for($x = 2; $x < $bilangan; $x++) {
			if($bilangan % $x == 0)
				$prima = false;
		}
	} else {
		$prima = false;
	}
	echo $prima ? 'Prima' : 'gak prima';
}

?>

<html>
	<head></head>
	<body>
		<form action='' method='POST'>
			<input type='text' name='bilangan'><br>
			<input type='submit' value='Submit'> 
		</form>
	</body>
</html>