<html>
<body>
<?php
//Grading System
			echo "<br>";
			$first_student = "Pedro";
			$first_grade = 99;
			$second_student = "Juan";
			$second_grade = 69;
			$third_student = "Barok";
			$third_grade = 55;
			

            //Passed Student
			if ($first_grade >= 70) 
			{
			echo "Name: ".$first_student . "<br>Grade: ". $first_grade . ", Passed <br>";
			} 
			elseif (($first_grade >=60) && ($first_grade <=69))
			{
				echo "Name: ".$first_student . "<br>Grade: ".$first_grade . ", Remedial <br>";
			}
			else
			{
				echo "Name: ".$first_student . "<br>Grade: ".$first_grade . ", Failed <br>";
			}

            //Remedial Student
			if ($second_grade >= 70) 
			{
			echo "Name: ".$second_student . "<br>Grade: ". $second_grade . ", Passed <br>";
			} 
			elseif (($second_grade >=60) && ($second_grade <=69))
			{
				echo "Name: ".$second_student . "<br>Grade: ".$second_grade . ", Remedial <br>";
			}
			else
			{
				echo "Name: ".$second_student . "<br>Grade: ".$second_grade . ", Failed <br>";
			}
			
			//Third Student
			if ($third_grade >= 70) 
			{
			echo "Name: ".$third_grade . "<br>Grade: ". $third_grade . ", Passed <br>";
			} 
			elseif (($third_grade >=60) && ($third_grade <=69))
			{
				echo "Name: ".$third_student . "<br>Grade: ".$third_grade . ", Remedial <br>";
			}
			else
			{
				echo "Name: ".$third_student . "<br>Grade: ".$third_grade . ", Failed <br>";
			}

?>
</body>
</html>