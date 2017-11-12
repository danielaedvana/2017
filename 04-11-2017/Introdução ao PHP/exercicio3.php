<html>
	<head>
		<title>Exercício 3 </title>
	</head>
	<body>
			<?php
				$data_ini  = '2017-06-07';
				$data_end  = '2017-10-28';
				 
				$dif = strtotime($data_end) - strtotime($data_ini);
				 
				$semanas = floor($dif / (60 * 60 * 168));
				 
				echo $semanas;
			?>
	</body>
<html>