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

			echo "Current Color is $color <br><br>";

			if ($color=="red") 
				echo "<div style='color:red'>STOP</div>";
			elseif($color=="green")
				echo "<div style='color:green'>GO</div>";
			else
				echo "Invalid Color";

		?>	

<!--PHP CODE-->







	<br><br><p style="font-size: 20px;">#IF COLOR IS RED "<font style="color:red">STOP</font>" WILL SHOW IN <font style="color:red">RED</font>. IF IT'S GREEN "<font style="color:green">GO</font>" IN <font style="color:green">GREEN</font></p>


	</main>

</body>
</html>