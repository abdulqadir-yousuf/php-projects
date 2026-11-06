<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// 1. Declare and initialize the array
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2. Print all elements
echo "All elements of the array:<br>";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";

// Variables for calculations
$total = 0;
$evenElements = 0;
$oddElements = 0;

// Variables for minimum and maximum
$minimum = $numbers[0];
$maximum = $numbers[0];

$minPositions = array();
$maxPositions = array();

// Loop through the array
foreach ($numbers as $position => $number) {

    // 3. Calculate total
    $total = $total + $number;

    // 4. Calculate total of even elements
    if ($number % 2 == 0) {
        $evenElements = $evenElements + $number;
    }

    // 5. Calculate total of odd elements
    if ($number % 2 != 0) {
        $oddTotal = $oddTotal + $number;
    }

    // 6. Find minimum element
    if ($number < $minimum) {
        $minimum = $number;
        $minPositions = array($position);
    }
    elseif ($number == $minimum) {
        $minPositions[] = $position;
    }

    // 7. Find maximum element
    if ($number > $maximum) {
        $maximum = $number;
        $maxPositions = array($position);
    }
    elseif ($number == $maximum) {
        $maxPositions[] = $position;
    }
}

// Print results
echo "Total of all elements: " . $total . "<br>";
echo "Total of even elements: " . $evenElements . "<br>";
echo "Total of odd elements: " . $oddElements . "<br>";

echo "Minimum element: " . $minimum . "<br>";
echo "Minimum positions: ";

foreach ($minPositions as $position) {
    echo $position . " ";
}

echo "<br>";

echo "Maximum element: " . $maximum . "<br>";
echo "Maximum positions: ";

foreach ($maxPositions as $position) {
    echo $position . " ";
}

?>
</body>
</html>