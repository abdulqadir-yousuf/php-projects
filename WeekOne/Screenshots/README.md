</> |Markdown
# PHP Programming Screenshots

This folder contains screenshots demonstrating PHP programming concepts covered in the course **Web Application Development - PHP & MySQL**.

---

# Week One

This folder contains PHP practice work and screenshots demonstrating the concepts practiced during Week One.

---

# 1. PHP Introduction

## Screenshot Name

`PHP_Introduction.png`

## Description

This screenshot demonstrates the introduction to PHP and the use of PHP code inside a web page.

The PHP practice includes:

- PHP output using `echo`.
- PHP output using `print`.
- PHP code written inside PHP tags.
- Displaying output in the browser.

## Screenshot

![PHP Introduction](Screenshots/PHP_Introduction.png)

---

# 2. Echo Statement

## Screenshot Name

`echo.png`

## Description

This screenshot demonstrates how the `echo` statement is used to display output.

Example:

```php
<?php

echo ("Welcome to PHP & MYSQL Course");

?>
```

The practice also demonstrates that `echo` can display multiple values:

```php
<?php

echo "Ali", "Mohamed";

?>
```

## Screenshot

![Echo Statement](Screenshots/echo.png)

---

# 3. Print Statement

## Screenshot Name

`printExample.png`

## Description

This screenshot demonstrates how the `print` statement is used to display text in PHP.

Examples:

```php
<?php

print "Welcome to PHP";

print ("Welcome to PHP");

?>
```

Both examples display text in the browser.

## Screenshot

![Print Example](Screenshots/printExample.png)

---

# 4. Constants in PHP

## Description

This practice demonstrates creating and using a constant in PHP.

Example:

```php
<?php

define("AGE", "my Awesome");

echo "my Constant variable", AGE;

?>
```

The `define()` function is used to create the constant, and the constant is then displayed using `echo`.

## Screenshot

![Constants](Screenshots/Results.png)

---

# 5. Ternary Expression

## Screenshot Name

`Treninary.png`

## Description

This screenshot demonstrates the use of a ternary expression with `print`.

Example:

```php
<?php

$x = 5;
$y = 10;

$x < $y ? print "x is less than y" : print "x is greater than y";

?>
```

The condition checks whether `$x` is less than `$y` and prints the corresponding message.

## Screenshot

![Ternary Expression](Screenshots/Treninary.png)

---

# 6. If Else Statement

## Screenshot Name

`UsingIF_else.png`

## Description

This screenshot demonstrates decision making using an `if ... else` statement.

Example:

```php
<?php

$Age = 10;
$grade = 10;

if ($Age > 20 || $grade > 20) {

    echo "that person can vote";

} else {

    echo "that person cant vote";

}

?>
```

The condition is evaluated first. If the condition is true, the first message is displayed; otherwise, the `else` statement is executed.

## Screenshot

![If Else Statement](Screenshots/UsingIF_else.png)

---

# 7. Switch Statement

## Screenshot Name

`UsingSwithch.png`

## Description

This screenshot demonstrates decision making using a `switch` statement.

Example:

```php
<?php

$Grade = 90;

switch ($Grade) {

    case ($Grade >= 90):
        echo "Excellent";
        break;

    case ($Grade >= 80):
        echo "Very Godd";
        break;

    case ($Grade >= 50):
        echo "minimal pass";
        break;

    default:
        echo "not passed";
}

?>
```

The switch structure checks the grade conditions and displays the corresponding result.

## Screenshot

![Switch Statement](Screenshots/UsingSwithch.png)

---

# 8. Results

## Screenshot Name

`Results.png`

## Description

This screenshot shows the output produced by the PHP practice code when it is executed.

## Screenshot

![Results](Screenshots/Results.png)

---

# 9. PHP Practice File

## File Name

`PHP_Introduction.php`

## Description

The `PHP_Introduction.php` file contains the PHP practice completed for Week One, including:

- `echo`
- `print`
- Multiple arguments with `echo`
- Constants using `define()`
- Ternary expression
- `if ... else`
- `switch`

The PHP code is executed through the web server and its output is displayed in the browser.
