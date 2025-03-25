<!DOCTYPE HTML>
<html>
	<head>
		<title>Document of PHP</title>
	</head>

	<pre>
		<?php

			//this is the Data type of the php

			$x= "Get cleared";
			$y= "hello";

			var_dump($x);
			echo "<br>";
			var_dump($y);

			//math library in php

			echo(min(12,34,23,56,77). "<br>");
			echo(max(23,11,45,98,0). "<br><br>");

			//constant and magic constant

			define("color", "yellow");
			echo "the color of the text  is ".color. "<br><br>";

			//if else and operator in php

			$r= date("H");
			

			if($r<20){
				echo "Have a good day"."<br><br>";
			}
			else{
				echo "Have a great day";

			}


			//switch case in php

			$fc= "red";

			switch($fc){

				case "yellow":
					echo "your favorite color is yellow";
					break;

				case "red":
					echo "your favorite color is red" . "<br><br>";
					break;

				case "blue":
					echo "your favorite color is blue";
					break;

				case "orange":
					echo "your favorite color is orange";
					break;

				default :
					echo "your favorite color is none";



			}

			//function in php

			function SH($minHeight= 25){
				echo "the height is : $minHeight <br><br>";
			}

			SH(300);
			SH(200);
			SH();
			SH(15);

			//function 

			function Fam($lastname, ...$firstname){
				$txt="";
			
				$len= count($firstname);
				for($i=0;$i< $len; $i++){
					$txt = $txt."Hi, $firstname[$i]. $lastname.<br>";
				}
					return $txt;
			}

			$a= Fam("Pandey", "Raj", "Ayush", "Jay");
			echo $a;



			


			
		
		?>
	</pre>
</html>