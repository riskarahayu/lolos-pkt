<html>
	<head>
	
	</head>
	<body>
		<?php
			$arr = [1];
 		?>
		<div style='display: flex; justify-content: center'>
			<div style='margin: 0 10px 0 10px;'>1</div>
		</div>
		<?php for($x = 0; $x < 10; $x++) { ?>
		<?php
			$string = []; 
		?>
		<div>
		
		
				<div style='display: flex; justify-content: center'>
					<?php $string[] = 1; ?>
					<?php for($y = 0;$y < count($arr); $y++) { ?>
					<?php
						if(isset($arr[$y+1])) {
							$string[] = $arr[$y] + $arr[$y+1];
						}			
					?>			
					<?php } ?>
					<?php $string[] = 1; ?>
					<?php 
						$arr = $string;
						foreach($string as $i => $s) {
							echo "<div style='margin: 0 10px 0 10px;'>".$s."</div>";
						}
					?>
						
				</div>					
		</div>
		<?php } ?>
	</body>
</html>