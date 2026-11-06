# Chapter 3: Arrays and Functions in PHP

This week covers the topics presented in **Chapter 3: Arrays and Functions in PHP**.

## Chapter Outline

- Introduction to Arrays
- Numerically Indexed Arrays
- The `foreach...as` Loop
- Associative Arrays
- Access Mechanism Operator (`=>`)
- Multi-dimensional Arrays
- Two-dimensional Numerically Indexed Arrays
- Using Array Functions
- Introduction to Functions
- Parameters vs Arguments
- Returning a Value
- Passing by Value vs by Reference
- Default Argument Value
- Scope of Variables
- Including Files in PHP

## 1. Introduction to Arrays

An array is a variable that holds multiple values mapped to keys or indexes. Each value in an array is called an element. PHP arrays can contain values of different data types. Array functions can be used to inspect, sort, add, remove, combine, and rearrange elements.

## 2. Types of Arrays

### Numerically Indexed Arrays

A numerically indexed array stores elements using numeric indexes. Indexes usually begin at `0`, and elements can be accessed by their positions.

### The `foreach...as` Loop

The `foreach...as` loop steps through array elements one at a time. It is useful when processing each element without manually managing a numeric index.

### Associative Arrays

An associative array stores values using named keys rather than only numeric indexes. It is useful for representing name/value pairs, such as a person's ID, name, age, address, and status.

### Access Mechanism Operator (`=>`)

The double arrow operator `=>` connects a key to its value when defining an associative array.

## 3. Multi-dimensional Arrays

A multidimensional array contains one or more arrays inside another array. A two-dimensional array can represent tabular information, with each inner array holding a row of related values. Nested loops can be used to visit elements in nested arrays.

## 4. Using Array Functions

The chapter introduces built-in functions used to inspect and manipulate arrays:

- `is_array` checks whether a variable is an array.
- `in_array` checks whether a value exists in an array.
- `count` returns the number of elements; `sizeof` behaves like `count`.
- `sort` sorts a numeric-indexed array in ascending order.
- `rsort` sorts a numeric-indexed array in descending order.
- `asort` sorts an associative array by value in ascending order.
- `arsort` sorts an associative array by value in descending order.
- `max` and `min` return the highest and lowest values in an array.
- `implode` converts an array into a string.
- `explode` splits a string into an array using a separator.
- `shuffle` puts array elements in random order.
- `array_merge` combines arrays.
- `array_reverse` returns the elements in reverse order.
- `array_push` adds elements to the end of an array.
- `array_pop` removes and returns the last element.
- `end` returns the last element of an array.

## 5. Introduction to Functions

A function is a set of statements designed to perform a particular task. Functions can be called when needed and can be reused, reducing repeated code and helping organize a program.

## 6. Parameters vs Arguments

Parameters are the variable placeholders listed in a function definition. Arguments are the actual values supplied when the function is called.

## 7. Returning a Value

A function can send a result back to the code that called it using a return value. The `return` statement ends the function's execution at that point.

## 8. Passing by Value vs by Reference

Passing by value gives the function a copy of the supplied value, so changes to the parameter do not change the original variable. Passing by reference allows the function to affect the original variable; the chapter shows the ampersand (`&`) in the parameter.

## 9. Default Argument Value

A function parameter can have a default value. If the corresponding argument is omitted when calling the function, the default value is used.

## 10. Scope of Variables

Variable scope describes where a variable can be accessed.

- **Local scope:** a variable declared inside a function is available within that function.
- **Global scope:** a variable declared outside a function is outside the function's local scope.
- The slides introduce `global` and `$GLOBALS` for accessing global variables from inside functions.
- The recap also mentions static variables, which retain their values between function calls while remaining local to the function.

## 11. Including Files in PHP

PHP can insert and evaluate the contents of another file using file-inclusion statements. This supports reusing shared code, such as headers, footers, menus, and libraries of functions.

- `include` includes a file; if it fails, PHP issues a warning and continues.
- `include_once` includes a file only once.
- `require` stops execution with a fatal error if the required file cannot be loaded.
- `require_once` requires a file only once.
- `function_exists` checks whether a function is available.
- Relative paths identify files in relation to the current directory.

## Folder Contents

- `MultiDimensional.php` — practical examples of multidimensional arrays, array functions, and functions.
- `Screenshoot/` — screenshots of the practical examples.
- `Screenshoot/README.md` — descriptions of the screenshots.

## Reference

The concepts in this README follow the provided lecture slides, **Chapter 3: Arrays and Functions in PHP**, by Lecturer Yahye Ali Isse.
