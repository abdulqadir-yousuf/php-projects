<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Nested loops in chapter 3";
    
    for($i =1; $i<=5; $i++)
        for($j=1; $j<=5; $j++)
    echo ("Row is $i , Column is $j =" ."Result is ". ($i * $j) . "<br>");


    

$employees = array(
    array("Ali", 23, "Developer"),
    array("Hassan", 25, "Designer"),
    array("Yusuf", 22, "Technician")
);

echo "Employee Details:<br>";

foreach ($employees as $employee) {

    foreach ($employee as $value) {
        echo $value . " | ";
    }

    echo "<br>";
}


    ?>
    
</body>
</html>