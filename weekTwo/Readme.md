Week Two — PHP Fundamentals & Control Structures
Overview
This README reviews the main ideas from Chapter 2: PHP Fundamentals & Control Structures. It follows the terminology and topics taught in the chapter slides. The separate `ScreenShots/Readme.md` explains the individual practice screenshots.
The chapter focuses on PHP syntax, output, comments, variables, data types, constants, operators, conditions, and loops. The screenshot practice README also includes array examples; those examples are useful practice, but arrays are not a main topic in the uploaded Chapter 2 slides (apart from `foreach` being introduced as a loop for arrays).

1. PHP Basics and Syntax
   PHP code is commonly saved in a file with the `.php` extension. A PHP file can contain regular text, HTML, and PHP code. PHP code begins with `<?php` and can end with `?>`.

```php
<!DOCTYPE html>
<html>
<body>
    <?php
        echo "Hello, PHP!";
    ?>
</body>
</html>
```

PHP statements normally end with a semicolon (`;`). When using XAMPP, place the file inside the web server's `htdocs` folder and open it through `localhost`. 2. Displaying Output: `echo` and `print`
Both `echo` and `print` display output in the browser.

```php
echo "Hello ", "World!";
print "Welcome to PHP";
```

`echo` can output multiple strings separated by commas.
`print` accepts one argument and returns a value.
Parentheses are optional when using them in these examples. 3. Single and Double Quotes
Single-quoted strings generally display variable names as ordinary text. Double-quoted strings allow PHP to substitute variable values.

```php
$name = "Ali";

echo 'Hello $name'; // Displays: Hello $name
echo "Hello $name"; // Displays: Hello Ali
```

4. Comments
   Comments explain code and are not executed.

```php
// Single-line comment
# Another single-line comment

/*
Multi-line comment
can span several lines.
*/
```

Use comments to make examples easier to understand. 5. Variables and Naming Rules
Variables store values and start with `$`. PHP variables do not need a type declaration before use.

```php
$name = "Amina";
$age = 20;

echo $name;
echo $age;
```

Key naming rules from the chapter:
A variable name starts with a letter or underscore after `$`.
It can contain letters, numbers, and underscores.
It cannot contain spaces or hyphens.
Variable names are case-sensitive: `$age` and `$Age` are different variables.
For multi-word names, use styles such as `$user_name` or `$userName`. 6. Basic Data Types
The chapter introduces these basic types:

```php
$age = 20;             // Integer
$price = 12.50;        // Floating-point number
$message = "Welcome";  // String
$isStudent = true;     // Boolean
```

A variable's value determines the kind of data it contains.
For strings, the slides also introduce:

```php
$text = "Welcome to PHP";

echo strlen($text);        // Number of characters
echo str_word_count($text); // Number of words
```

7. Constants
   A constant stores a value intended not to change while the program runs. As shown in the chapter, define one with `define()` and refer to it without `$`.

```php
define("PI", 3.14);

echo PI;
```

The slides recommend writing constant names in uppercase. 8. Operators
Operators perform calculations, comparisons, and logical checks.
Type Operators Example
Assignment `=` `$x = 5;`
Arithmetic `+`, `-`, `*`, `/`, `%` `$x + 2`
Arithmetic assignment `+=`, `-=`, `*=`, `/=`, `%=` `$x += 2;`
Comparison `<`, `<=`, `>`, `>=`, `==`, `!=` `$x >= 5`
Logical `&&`, `	
Concatenation	`.`	`"Hi " . $name`
Increment/decrement	`++`, `--`	`$x++`
Ternary	`? :`	`$x > 0 ? "Yes" : "No"`Operator precedence affects the order in which an expression is evaluated. Use parentheses when you want the order to be clear.
9. Conditional Control Structures
Conditional statements allow a program to choose which code to execute based on a condition.`if`and`if...else`

```php
$marks = 65;

if ($marks >= 50) {
    echo "Pass";
} else {
    echo "Not pass";
}
```

`if...elseif...else`
Use this when there are several conditions to check.

```php
$marks = 87;

if ($marks >= 90) {
    echo "Excellent";
} elseif ($marks >= 80) {
    echo "Very good";
} elseif ($marks >= 50) {
    echo "Minimal pass";
} else {
    echo "Not pass";
}
```

`switch`
`switch` compares an expression against different `case` values. Use `break` to stop execution from continuing into the next case. A `default` case can handle unmatched values.

```php
$page = "Home";

switch ($page) {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    default:
        echo "Unrecognized selection";
}
```

Ternary operator
The ternary operator is a short form of a simple `if...else`.

```php
$fuel = 0;

echo ($fuel <= 1) ? "Fill tank now" : "Enough fuel";
```

10. Loop Control Structures
    Loops repeat code. As covered in the chapter, a loop usually needs an initial value, a condition, and a counter update where applicable.
    `while`
    Checks the condition before running the loop body.

```php
$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}
```

`do...while`
Runs the body first and checks the condition afterward, so it runs at least once.

```php
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
```

`for`
Puts initialization, condition, and update in one line.

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
```

`foreach`
The chapter introduces `foreach` as a loop that processes each element in an array. The screenshot README contains practical examples of this loop with array values and key-value pairs.

```php
$numbers = [10, 20, 30];

foreach ($numbers as $number) {
    echo $number . "<br>";
}
```

11. `break`, `continue`, and Nested Loops
    `break` stops the loop before it would normally finish.
    `continue` skips the rest of the current iteration and moves to the next iteration.
    A nested loop is a loop inside another loop. The inner loop runs during each iteration of the outer loop.

```php
for ($row = 1; $row <= 3; $row++) {
    for ($column = 1; $column <= 3; $column++) {
        echo "$row, $column<br>";
    }
}
```

4. Arrays in PHP

An array is a variable that stores multiple values. PHP supports numeric (indexed), associative, and multidimensional arrays.

4.1 Numeric (Indexed) Arrays

A numeric array stores values using numeric indexes. Indexes start at 0, so the first element is accessed using $array[0].

$fruits = ["Apple", "Banana", "Mango"];

echo $fruits[0]; // Apple
echo $fruits[1]; // Banana

Explanation:

$fruits is the array variable.

Each element has a numeric index.

echo displays the value at the specified index.

You can use foreach to display every element:

foreach ($fruits as $fruit) {
echo $fruit . "<br>";
}

The loop assigns each array value to $fruit one at a time.

4.2 Associative Arrays

An associative array stores values using named keys instead of numeric indexes. The => operator connects each key to its value.

$student = [
"id" => 101,
"name" => "Ali",
"age" => 22
];

echo $student["id"];
echo $student["name"];

Explanation:

"id", "name", and "age" are keys.

101, "Ali", and 22 are their corresponding values.

A value is accessed using its key, for example $student["name"].

To display both keys and values, use foreach:

foreach ($student as $key => $value) {
echo $key . ": " . $value . "<br>";
}

Here, $key contains the current key and $value contains its associated value.

You can also modify an associative array:

$student["age"] = 23;        // Update a value
$student["city"] = "Mogadishu"; // Add a new element
unset($student["city"]); // Remove an element

4.3 Multidimensional Arrays

A multidimensional array contains one or more arrays inside another array. It is useful for organizing related records, such as students or employees.

$students = [
["name" => "Ali", "grade" => 85],
["name" => "Amina", "grade" => 90]
];

foreach ($students as $student) {
echo $student["name"] . ": " . $student["grade"] . "<br>";
}

Explanation:

$students contains two student records.

Each record is an associative array.

foreach visits each student record.

The inner keys "name" and "grade" access the details of each student.

4.4 Useful Array Functions

PHP provides functions for checking and displaying array information.

Function

Explanation

count($array)

Returns the number of elements in an array.

array_keys($array)

Returns the keys of an array.

array_values($array)

Returns the values of an array.

array_key_exists("id", $array)

Checks whether a particular key exists.

isset($array["name"])

Checks whether a value is set and is not null.

in_array("Apple", $array)

Checks whether a value exists in an array.

print_r($array)

Displays readable information about an array.

var_dump($array)

Displays detailed information, including data types and values.

Example:

$vehicle = [
"brand" => "Honda",
"model" => "Civic",
"year" => 2021
];

echo count($vehicle);

print_r(array_keys($vehicle));
print_r(array_values($vehicle));

if (array_key_exists("brand", $vehicle)) {
echo "The brand key exists.";
}

4.5 Nested Loops and Arrays

Nested loops are loops placed inside other loops. They can be used to process data arranged in rows and columns or to work with nested data structures.

for ($row = 1; $row <= 3; $row++) {
    for ($column = 1; $column <= 3; $column++) {
echo "Row $row, Column $column<br>";
}
}

The outer loop controls the rows, while the inner loop processes each column for every row.
