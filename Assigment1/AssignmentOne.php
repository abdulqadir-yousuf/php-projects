<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//Question 1;

$num1 = 25;
$num2 = 10;
$num3 = 18;


if ($num1 >= $num2 && $num1 >= $num3) {
    $greatest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $greatest = $num2;
} else {
    $greatest = $num3;
}

echo "<br>";

$number1 = 25;
$number2 = 10;
$number3 = 18;


if ($number1 <= $number2 && $number1 <= $number3) {
    $lowest = $number1;
} elseif ($number2 <= $number1 && $number2 <= $number3) {
    $lowest = $number2;
} else {
    $lowest = $number3;
}
 echo "the gretest number is $greatest";
 echo "<br>";
 echo "the lowest number is $lowest";

echo "<br>";

 // Question 2;

 $num =9;
 if($num % 2==0 && $num % 3==0){
    echo"it can divible by 2 and 3 <br>";

 }elseif($num % 2==0){
    echo"can be divisible by 2 <br>";

 }elseif($num % 3==0){
    echo"can be divisble by 3 <br>";
 }else{
    echo"it can nit be divisible <br>";
 }


 // Question 3;
 echo "odd number from 2 to 20 <br>";
 for ($i = 2; $i<=20; $i++){
   if ($i %2 !=0)
      {
         echo "$i . ";
      }    
 }
 echo "<br>";
 echo "even number from 35 to 7 <br>";
 for ($i = 35; $i>=7; $i--){
   if ($i % 2==0)
      {
         echo "$i . ";
      }
 }


echo "<br>";

    
 // Question 4;
    

echo "Numbers divisible by both 2 and 5:<br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

//question5
echo "Reverse a Number";


$num = 12345;
$reverse = 0;

while ($num > 0) {
    $remainder = $num % 10;
    $reverse = ($reverse * 10) + $remainder;
    $num = (int)($num / 10);
}

echo "Reverse: " . $reverse;

echo "<br>";


//QUESTION 6

echo "lcm";



$num1 = 8;
$num2 = 12;

$lcm = ($num1 > $num2) ? $num1 : $num2;

while (true) {
    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }

    $lcm++;
}

echo "LCM of $num1 and $num2 is: " . $lcm;

echo "<br>";


echo "HCF";


$num1 = 18;
$num2 = 24;

$hcf = 1;

for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF of $num1 and $num2 is: " . $hcf;

echo "<br>";

?>






    
</body>
</html>