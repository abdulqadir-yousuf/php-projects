<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 echo ("Welcome to PHP & MYSQL Course"); 
 echo "<br>";

 
// Print Example
print "Welcome to PHP";

print ("Welcome to PHP");

echo"<br>";

// Multiple Arguments with Echo
echo "Ali", "Mohamed";
echo"<br>";


 define("AGE","my Awesome");
 echo "my Constant variable", AGE;
 echo"<br>";


 ## Ternary Expression
// `print` can be used inside a ternary expression, while `echo` cannot.
Example:
// php

$x = 5;
$y = 10;
$x < $y ? print "x is less than y" : print "x is greater than y";

echo"<br>";

 $Age=10;
 $grade=10;
 if($Age>20 || $grade>20){
    
    echo "that person can vote ";
    
    

    echo"<br>";
 
    

 }else{
    echo "that person cant vote";   
    echo "<br>";
 }

$Grade=90;
switch($Grade){
    case($Grade>=90);
    echo"Excellent";
    break;
    case($Grade>=80);
    echo"Very Godd";
    break;
    case($Grade>=50);
    echo "minimal pass";
    break;
default;
echo"not passed";
}
?>
</body>
</html>