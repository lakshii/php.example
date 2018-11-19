<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Over 100 "Overflow"</title>
</head>
<body style="font-size: 50px; text-align: left;">

	<main>
	<p align="right" style="font-size:medium;"><a href="../">Back to HOME</a></p>







<!--PHP CODE-->

		<?php 
			

			//change x and y to get "Overflow" as output
			$x = 50;
			$y = 1;

			echo "<center>X is $x Y is $y </center><br>";
			$var1 = $x + $y;
			$var2 = $x - $y;
			$var3 = $x * $y;
			$var4 = $x / $y;

			if ($var1 >= 100 || $var2 >= 100 || $var3 >= 100 || $var4 >= 100) 
				echo "Overflow";
			else {
				echo "<br> X + Y = ", $x + $y;
				echo "<br> X - Y = ", $x - $y;
				echo "<br> X * Y = ", $x * $y;
				echo "<br> X / Y = ", $x / $y;}		
		?>	

<!--PHP CODE-->







	</main>

</body>
</html>