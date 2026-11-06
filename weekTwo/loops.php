<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Loops in chapter 3";

    /// while loop 

    /example of while loop
    $i=1;
    while($i<=15){
        echo "$i, ";
        $i++;
    }
    echo"<br>";
    $result =1;
    $n=5;
    do{
        $result*=$n;
        echo"the value of n is: $n<br>";
        $n--;
    }while ($n >0);
    echo $result;

    for($i =1; $i<3; $i++)
        for($j=1; $j<=5; $j++)
    echo ("$i * $j =" . ($i * $j) . "<br>");

    // foreach loop example  

$numbers = array(12, 24, 36, 48);

foreach ($numbers as $number) {
    echo $number . "<br>";
}

// Do While loop 

$i = 1;

do {
    echo "Number: " . $i . "<br>";
    $i++;
} while ($i <= 5);


    ?>
</body>
</html>