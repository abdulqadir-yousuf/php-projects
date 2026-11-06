<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // absolute path or relative path
    echo "calling fucntion in another file using include <br>";
    include "function.php";
    include_once "function.php";
   testOne();
    ?>
</body>
</html>