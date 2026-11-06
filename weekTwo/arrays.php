<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "<h1>PHP Arrays Practice</h1>";

// =====================================
// 1. NUMERIC ARRAY
// =====================================

$names = [];

$names[] = "Hassan";
$names[] = "Yusuf";
$names[] = "Abdi";

echo "<h3>Names in the Array</h3>";

var_dump($names);

echo "<br>";

echo "First name: " . $names[0] . "<br>";

foreach ($names as $name) {
    echo "<h4>" . $name . "</h4>";
}


// =====================================
// Creating an Array with Values
// =====================================

$marks = [15, 25, 35, 45, 55];

echo "<h3>Marks</h3>";

foreach ($marks as $mark) {
    echo $mark . "<br>";
}

echo "<pre>";
print_r($marks);
echo "</pre>";


// =====================================
// 2. ASSOCIATIVE ARRAY
// =====================================

echo "<h2>Associative Arrays</h2>";



$person = [
    "name" => "Hassan",
    "age" => 22,
    "city" => "Mogadishu"
];

echo "Name: " . $person["name"] . "<br>";

// adding a new key
$person["phone"] = "0634567890";

// changing an existing value
$person["age"] = 23;

// removing a key
unset($person["city"]);

echo "<h3>Person Information</h3>";

echo "<pre>";
print_r($person);
echo "</pre>";


// Another associative array

$vehicle = [
    "brand" => "Honda",
    "model" => "Civic",
    "year" => 2021
];

echo "<h3>Vehicle Information</h3>";

foreach ($vehicle as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

 // using double array (=>) to connect key/value(index/value);
$info = array(
    "id" => 101,
    "name" => "Ali",
    "age" => 22
);

foreach ($info as $id => $value) {
    echo $id . " : " . $value . "<br>";
}

// =====================================
// 3. MULTIDIMENSIONAL ARRAY
// =====================================

echo "<h2>Multidimensional Arrays</h2>";

$programmer = [
    "name" => "Abdi",
    "job" => "Web Developer",
    "skills" => ["PHP", "HTML", "CSS"],
    "city" => "Mogadishu"
];

echo "<h3>Programmer Information</h3>";

echo "Name: " . $programmer["name"] . "<br>";
echo "Job: " . $programmer["job"] . "<br>";
echo "First skill: " . $programmer["skills"][0] . "<br>";


// Array containing student records

$studentList = [
    ["name" => "Hassan", "grade" => 88],
    ["name" => "Yusuf", "grade" => 92]
];

echo "<h3>Student Grades</h3>";

foreach ($studentList as $student) {
    echo $student["name"] . " : " . $student["grade"] . "<br>";
}


// =====================================
// ARRAY INFORMATION
// =====================================

echo "<h3>Array Information</h3>";

echo "Number of vehicle details: " . count($vehicle) . "<br>";

if (array_key_exists("brand", $vehicle)) {
    echo "The brand key exists.<br>";
}

if (isset($vehicle["color"])) {
    echo "Color is available.<br>";
} else {
    echo "Color is not available.<br>";
}

if (in_array("Honda", $vehicle)) {
    echo "Honda is in the vehicle information.<br>";
}

echo "Vehicle keys:<br>";

print_r(array_keys($vehicle));

echo "<br>Vehicle values:<br>";

print_r(array_values($vehicle));

        ?>
</body>
</html>