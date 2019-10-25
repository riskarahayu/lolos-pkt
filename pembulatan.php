<?php

if(isset($_POST['bilangan']) && isset($_POST['tipe'])) {
	$bilangan = $_POST['bilangan'];
	if($bilangan > 9 && $_POST['tipe'] == 'puluhan') {
		$panjang_bilangan = strlen($bilangan);
		$bilangan_depan = substr($bilangan, 0, $panjang_bilangan-1);
		$bilangan_puluhan = substr($bilangan, $panjang_bilangan-1, 1);
		if($bilangan_puluhan >= 5)
	 		echo (string)($bilangan_depan+1).'0';
		else 
	 		echo (string)($bilangan_depan).'0';
	} elseif ($bilangan > 99 && $_POST['tipe'] == 'ratusan') {
		$panjang_bilangan = strlen($bilangan);
		$bilangan_depan = substr($bilangan, 0, $panjang_bilangan-2);
		$bilangan_ratusan = substr($bilangan, $panjang_bilangan-2, 1);
		if($bilangan_ratusan >= 5)
	 		echo (string)($bilangan_depan+1).'00';
		else 
	 		echo (string)($bilangan_depan).'00';
	}	else {
		echo 'Nilai kurang';
	}
}

?>

<html>
	<head></head>
	<body>
		<form action='' method='POST'>
			<input type='text' name='bilangan' value='<?php echo isset($_POST['bilangan']) ? $_POST['bilangan'] : '' ?>'><br>'
			<input type='radio' name='tipe' value='puluhan' checked> Puluhan
			<input type='radio' name='tipe' value='ratusan'> Ratusan <br>
			<input type='submit' value='Submit'> 
		</form>
	</body>
</html>