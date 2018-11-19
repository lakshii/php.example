<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exam Results using Marks</title>
</head>
<body style="font-size: 50px; text-align: center;">

	<main>
	<p align="right" style="font-size:medium;"><a href="../">Back to HOME</a></p>







<!--PHP CODE-->

		<?php 
			

			//change marks to get different output
			$mark = 98;

			echo "Marks : $mark<br><br>";

			if ($mark==0) 
				echo "Result : Not SAT";
			elseif ($mark>0 && $mark<=25)
				echo "Result : E";
			elseif ($mark>25 && $mark<=50)
				echo "Result : D";
			elseif ($mark>50 && $mark<=60)
				echo "Result : C";
			elseif ($mark>60 && $mark<=70)
				echo "Result : B";
			elseif ($mark>70 && $mark<=80)
				echo "Result : A-";
			elseif ($mark>80 && $mark<=90)
				echo "Result : A";
			elseif ($mark>90 && $mark<=100)
				echo "Result : A+";	
			else
				echo "Result : Invalid Marks";
		?>	

<!--PHP CODE-->







	</main>

</body>
</html>