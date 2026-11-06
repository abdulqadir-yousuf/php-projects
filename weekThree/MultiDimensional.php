
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3 - Arrays and Functions in PHP</title>
</head>
<body>
<?php
// 1. Multidimensional arrays
$student = array(
    array("Jaamac", 1998, "Hodan", "0726262"),
    array("Ahmed", 2000, "Wadajir", "0846643")
);

echo "<h3>Multidimensional Array</h3>";
foreach ($student as $list) {
    echo $list[0] . "<br>";
}

echo "<p>All student details:</p>";
foreach ($student as $row) {
    foreach ($row as $value) {
        echo $value . "<br>";
    }
}

// 2. is_array()
echo "<h3>Array Functions</h3>";
$info1 = "Ali Mohamed Ahmed";
$info = array("Ali", "Mohamed", "Ahmed");

if (is_array($info1)) {
    echo "The variable is an array.<br>";
} else {
    echo "The variable is not an array.<br>";
}

// 3. in_array()
if (in_array("Ali", $info)) {
    echo "Ali was found in the array.<br>";
} else {
    echo "Ali was not found in the array.<br>";
}

// Check a value inside a nested array
$arrays = array(
    array(90, "Ali", 2020),
    array(100, "Jaamac", 2021)
);
if (in_array("Ali", $arrays[0])) {
    echo "Ali was found in the first nested array.<br>";
} else {
    echo "Ali was not found in the first nested array.<br>";
}

// 4. count()
echo "The size of the array is " . count($info) . "<br>";

// 5. explode() - split a string into an array
echo "<h3>explode()</h3>";
$sentence = "The quick brown fox jumps";
$words = explode(" ", $sentence);
echo "<pre>";
print_r($words);
echo "</pre>";

// 6. shuffle() - randomize the order of array elements
echo "<h3>shuffle()</h3>";
shuffle($words);
echo "<pre>";
print_r($words);
echo "</pre>";

// 7. array_merge() - combine arrays
echo "<h3>array_merge()</h3>";
$a1 = array(1, 2, 3);
$a2 = array(1, 5, 6);
$a3 = array_merge($a1, $a2);
echo "<pre>";
print_r($a3);
echo "</pre>";

// 8. array_reverse() - reverse element order
echo "<h3>array_reverse()</h3>";
$reversed = array_reverse($a3);
echo "<pre>";
print_r($reversed);
echo "</pre>";

// 9. array_push(), array_pop(), end()
echo "<h3>array_push(), array_pop(), end()</h3>";
$numbers = array(2, 4, 6, 8);
array_push($numbers, 10);
echo "After array_push(): ";
print_r($numbers);
echo "<br>Removed item: " . array_pop($numbers) . "<br>";
echo "Last item: " . end($numbers) . "<br>";

// 10. User-defined function, parameters, default argument, return
function sum($x, $y = 100) {
    return $x + $y;
}
echo "<h3>Functions</h3>";
echo "Sum: " . sum(200, 100) . "<br>";
echo "Sum using default argument: " . sum(200) . "<br>";

// 11. Passing by reference (as shown in the lecture slides)
$a = 5;
function factorialByReference(&$x) {
    $result = 1;
    for ($i = 2; $i <= $x; $i++) {
        $result *= $i;
    }
    $x++;
    return $result;
}
echo "Factorial of 5: " . factorialByReference($a) . "<br>";
echo "Value of a after passing by reference: " . $a . "<br>";
?>
</body>
</html>
