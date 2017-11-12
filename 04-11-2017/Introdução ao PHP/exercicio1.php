<html>
	<head>
		<title>Exercício 1 </title>
	</head>
	<body>
			<table>
				<?php 
					for ($i = 1; $i <= 10; $i++) {
						echo "<tr>";
						$number = $i;
						for ($j = 1; $j <= 10; $j++) {
							echo "<td>";
							  if($i == 1){
								  if ($j != 1){
									   $number++;
								  }
							  } else {
								  if ($j != 1){
									$number += $i; 
								  }
							  }
							  echo $number;
							echo "</td>";
						}
						echo "</tr>";
					}
				?>
			</table>
	</body>
<html>
