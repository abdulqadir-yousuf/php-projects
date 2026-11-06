# Week 2: Loops and Arrays

This folder contains my Week 2 practice screenshots from PHP. The practice focuses on loops and arrays.

# Week 2 Practice Screenshots

The screenshots below show the main examples I practiced during Week 2.

---

# 1. While Loop

## Screenshot Name

`WhileLoop.png`

## Description

This screenshot shows a `while` loop that starts with a value of 1 and continues while the condition is true.

### Code Example

```php
$i = 1;

while ($i <= 15) {
    echo "$i, ";
    $i++;
}
```

## Screenshot

![While Loop](WhileLoop.png)

---

# 2. Do-While and Nested For Loops

## Screenshot Name

`NestedLoop.png`

## Description

This screenshot contains a `do-while` example and nested `for` loops. The nested loops are used to work with rows and columns.

### Code Example

```php
$result = 1;
$n = 5;

do {
    $result *= $n;
    echo "The value of n is: $n<br>";
    $n--;
} while ($n > 0);
```

### Nested Loop Example

```php
for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= 5; $j++) {

        echo "$i * $j = " . ($i * $j) . "<br>";

    }
}
```

## Screenshot

![Nested Loop](NestedLoop.png)

---

# 3. Numeric Arrays

## Screenshot Name

`Creating Array.png`

## Description

This screenshot shows how to create a numeric array, access an element using its index, loop through the values using `foreach`, and display the array using `print_r`.

### Code Example

```php
$marks = [15, 25, 35, 45, 55];

foreach ($marks as $mark) {
    echo $mark . "<br>";
}

print_r($marks);
```

## Screenshot

![Numeric Array](Creating%20Array.png)

---

# 4. Associative Arrays

## Screenshot Name

`AssociativeArray.png`

## Description

This screenshot demonstrates an associative array where values are stored using named keys. It also shows adding a new value, changing an existing value, and removing a value.

### Code Example

```php
$person = [
    "name" => "Hassan",
    "age" => 22,
    "city" => "Mogadishu"
];

$person["phone"] = "0634567890";

$person["age"] = 23;

unset($person["city"]);

print_r($person);
```

## Screenshot

![Associative Array](AssociativeArray.png)

---

# 5. Associative Array Using Key and Value

## Screenshot Name

`Assiciative array .png`

## Description

This screenshot shows how the `=>` operator connects a key with a value. A `foreach` loop is then used to display both the key and its value.

### Code Example

```php
$info = array(

    "id" => 101,
    "name" => "Ali",
    "age" => 22

);

foreach ($info as $key => $value) {

    echo $key . " : " . $value . "<br>";

}
```

## Screenshot

![Associative Array Key Value](Assiciative%20array%20.png)

---

# 6. Array Information

## Screenshot Name

`ArrayInformative.png`

## Description

This screenshot shows some basic ways of getting information from an associative array, including the number of elements, checking keys and values, and displaying the keys and values.

### Code Example

```php
$vehicle = [
    "brand" => "Honda",
    "model" => "Civic",
    "year" => 2021
];

echo "Number of vehicle details: " . count($vehicle);

print_r(array_keys($vehicle));

print_r(array_values($vehicle));
```

## Screenshot

![Array Information](ArrayInformative.png)

---

# Conclusion

In Week 2, I practiced different types of loops and arrays in PHP. I also practiced using `foreach` with arrays, associative arrays with key-value pairs, and nested loops with multidimensional data.
