<html>
<body>
<?php

//Equality
$a = 1;
$b = 0;

if($a != $b) echo "1";
if($a !== $b) echo "2";
echo "<br>";
//Comparison operator
if($a > $b) echo "a is greater than b";
echo "<br>"; 
if($a < $b) echo "a is less than b ";
echo "<br>";
if($a >= $b) echo "a is greater than or equal to b";
echo "<br>";
if($a <= $b) echo "a is less than or equal to b";

//Logical Operators

echo ($a or $b ). "<br>";
echo ($a XOR $b). "<br>";
echo ($a AND $b). "<br>";
echo !$a        . "<br>";
	
//If statement

if($bank_balance<100)
{
   $money = 1000;
   $bank_balance+=$money;
   echo $bank_balance;
}

//else if statement

if($bank_balance<100)
{
   $money = 1000;
   $bank_balance+=$money;
 =
elseif($bank_balance>200)
{
   $money = 1000;
   $bank_balance+=$money;
   
}
else
{
   $money = 1000;
   $bank_balance+=$money;
   
}

//switch 

switch
{
   case "Home";
       echo "You selected Home";
	   break;
   case "Login";
       echo "You selected Login";
	   break;
   case "Links";
       echo "You selected Links";
	   break;
}
 
 
?>
</body>
</html>