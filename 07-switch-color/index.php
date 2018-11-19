<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Switch Color</title>
</head>
<body style="font-size: 50px; text-align: center;">

	<main>
	<p align="right" style="font-size:medium;"><a href="../">Back to HOME</a></p>







<!--PHP CODE-->

		<?php 
			
			$color = "green";

			if ($color=="red") 
				echo "<div style='color:red'>STOP</div>";
			elseif($color=="green")
				echo "<div style='color:green'>GO</div>";
			else
				echo "Invalid Color";

		?>	

<!--PHP CODE-->







	</main>

</body>
</html>