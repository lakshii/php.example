<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Switch Month Using Cases</title>
</head>
<body style="font-size: 50px; text-align: center;">

	<main>
	<p align="right" style="font-size:medium;"><a href="../">Back to HOME</a></p>







<!--PHP CODE-->

		<?php 
			

			//change month [1 - 12] to get different output
			$month = 1;

			switch ($month) {
				case 1:
					echo "This is January";
					break;				
				case 2:
					echo "This is February";
					break;
				case 3:
					echo "This is March";
					break;
				case 4:
					echo "This is April";
					break;
				case 5:
					echo "This is May";
					break;
				case 6:
					echo "This is June";
					break;
				case 7:
					echo "This is July";
					break;
				case 8:
					echo "This is August";
					break;
				case 9:
					echo "This is September";
					break;
				case 10:
					echo "This is October";
					break;
				case 11:
					echo "This is November";
					break;
				case 12:
					echo "This is December";
					break;
				default:
					echo "Please enter Valid Month";
					break;
			}
		?>	

<!--PHP CODE-->







	</main>

</body>
</html>