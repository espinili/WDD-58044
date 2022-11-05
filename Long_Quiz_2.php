<html>
<body>
 <head>
	<title>Espinili Long Quiz 2</title>
 </head>
 <body bgcolor = "orange">
 <h1><font size="+3">WDD Long Quiz 2</font></h1>
  <h2><font size="+2">Espinili, John Carlo A.</font></h2>
   <h3><font size="+2">201914067</font></h3>
 
	
	<h4><font size="+1">Problem 1:</font></h4>
		<?php
				
				 $salary_rate = 600;
				 $salary = $salary_rate * 15;
				 $taxable_amount = $salary * .30;
				 $net_pay = $salary - $taxable_amount;

				 echo "Salary Rate = ".$salary_rate."/day <br>";
				 echo "Salary = " .$salary."/15 days<br>";
				 echo "Taxable amount = " .$taxable_amount."/30% of Salary<br>";
				 echo "Net pay = " .$net_pay."<br><br>";
				
		?>

    
  	<h5><font size="+1">Problem 2:</font></h5>
	    <?php
		        for ($x = 0; $x < 51; $x++)
		        {
		         if ($x == 51)
		        {
			     break;
		        } 
		         echo"+ $x <br>";
	            }
	    ?>
	
	    <?php
		

	            $sum=0; 
	            for ($i=1; $i<=50; $i++) 
	            { $sum+$i=$sum; } 
	            echo "The sum of the positive integers from 1 to 50 = ". ($sum) . "<br/>";

        ?>
		
</body>
</html>
		