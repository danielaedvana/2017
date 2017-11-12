<html>
	<head>
		<title>Exercício 4 </title>
	</head>
	<body>
			<table>
				<?php 
					$number = 5;
					for ($i = 1; $i <= 10; $i++) {
						if($i  <= 5){
							for ($j = 1; $j <= $i; $j++) {
								echo "*";
							}
						} 
						else {
							for ($k = $number; $k >= 1; $k--) {
								echo "*";
							}
							$number--;
						}
						echo "</br>";
					}
				?>
			</table>
	</body>
<html>
