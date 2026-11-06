<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Listbox (Multiple Choice)     -->
    <form method="post" enctype="multipart/form-data">
    <select name="residence[]" multiple>
        <option value="Muqdisho">Muqdisho</option>
        <option value="Hargeysa">Hargeysa</option>
        <option value="Kismayo">Kismayo</option>
        <option value="Marko">Marko</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Register">
</form>
    
    <?php
    // Listbox (Multiple Choice)
if (!empty($_POST['residence'])) {
    foreach ($_POST['residence'] as $r)
        echo ("$r,  ");
}
    // read all elements
    if(!empty ($_FILES['stdimage'])){
        echo "file name is :" . $_FILES['stdimage']['name'];
        echo"<hr>";
        echo "file Size is :" . $_FILES['stdimage']['size'];
        echo"<hr>";
        echo "file type is :" . $_FILES['stdimage']['type'];
        echo"<hr>";
        echo "Temp_name is :" . $_FILES['stdimage']['temp_name'];
        echo"<hr>";
        

    }else{
        echo "please select your file";
    }
    ?>

    <!-- HTML Code: Upload an Image -->
     <form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select Your image</label>
    <hr>
    <input type="file" name="stdimage">
    <hr>
    <input type="submit" name="submit" value="Upload Image">
</form>

<?php
// File Upload Process
if (isset($_FILES['file'])) {
    if (move_uploaded_file(
        $_FILES['file']['tmp_name'],
        'uploads/' . $_FILES['file']['name']
    )) {
        echo "File uploaded successfully";
    }
}

// Create the Upload File PHP Script: File Information
$_FILES['scertificate']['name'];
$_FILES['scertificate']['size'];
$_FILES['scertificate']['tmp_name'];
$_FILES['scertificate']['type'];
?>

<!-- HTML Form for Uploading an Image -->
<form action="Home.php" method="post">
        <label for="">Upload Files / label</label><hr>
        <input type="file" name="stdimage"><hr>
        <input type="submit" value="Upload image" name="submit">

        <!-- // argument of type , Argument of size , argument of name and temporary name  -->
    </form>
<!-- -PHP Code to Display File Information -->
 <?php
if (!empty($_FILES['stdimage']['name'])) {
    echo "file Name : " . $_FILES['stdimage']['name'];
    echo "<hr>";

    echo "File Size: " . $_FILES['stdimage']['size'];
    echo "<hr>";

    echo "Temporary Name: " . $_FILES['stdimage']['tmp_name'];
    echo "<hr>";

    echo "File Type: " . $_FILES['stdimage']['type'];
} else {
    echo "no file is selected";
}

// Move the Uploaded File
$temp = $_FILES['stdimage']['tmp_name'];

$destination = "d:/PHP/New PHP_Update/Test/" .
               $_FILES['stdimage']['name'];

if (move_uploaded_file($temp, $destination)) {
    echo "File uploaded successfully";
} else {
    echo "File upload failed";
}

// Upload Without Renaming
if (move_uploaded_file(
    $_FILES['scertificate']['tmp_name'],
    "Docs/" . $_FILES['scertificate']['name']
))
    echo ("<br>Certificate has been uploaded successfully.");
?>

<!-- Renaming an Uploaded File -->
 <form action="Home.php" method="post" enctype="multipart/form-data">
    <label for="">Select Your image</label>
    <hr>
    <input type="file" name="stdimage">
    <hr>

    <label>Enter New File Name:</label>
    <hr>
    <input type="text" name="fullName">
    <hr>

    <input type="submit" name="submit" value="Upload Image">
</form>

<!-- Display Information and Rename Uploaded File -->
 <?php
if (!empty($_FILES['stdimage']['name']))
{
    echo "file Name : " . $_FILES['stdimage']['name'];
    echo "<hr>";
    echo "File Size: " . $_FILES['stdimage']['size'];
    echo "<hr>";
    echo "Temporary Name: " . $_FILES['stdimage']['tmp_name'];
    echo "<hr>";
    echo "File Type: " . $_FILES['stdimage']['type'];

    // Rename uploaded file
    $ext = explode(".", $_FILES['stdimage']['name']);
    $ext = end($ext);

    // Move the uploaded file
    $temp = $_FILES['stdimage']['tmp_name'];
    $destination = "d:/PHP/New PHP_Update/Test/" .
                   $_POST['fullName'] . "." . $ext;

    // Check whether file already exists
    if (file_exists($destination))
    {
        echo "Sorry, file already exists";
    }
    else
    {
        // Move the uploaded file
        if (move_uploaded_file($temp, $destination))
            echo "File uploaded successfully";
        else
            echo "File upload failed";
    }
}
else
{
    echo "no file is selected";
}
echo "<hr>";
  

// Rename Uploaded File

$ext = explode(".", $_FILES['scertificate']['name']);
$ext = end($ext);

if (move_uploaded_file(
    $_FILES['scertificate']['tmp_name'],
    ("Docs/" . $_POST['fullName']) . ".$ext"
))
    echo ("<br>Your photo has been uploaded successfully.");


// file_exists() Function

if (file_exists("Docs/" . $_FILES['scertificate']['name']))
    echo ("<br>Sorry, file: " .
          $_FILES['scertificate']['name'] .
          " already exists.");
    


// Check File Size
if (!$_FILES['scertificate']['size'])
    echo ("File: " . $_FILES['scertificate']['name'] . " is too big.");

// Check File Size Before Moving the File
if ($_FILES["stdimage"]['size'] < 10 * 1024)
{
    // Move the uploaded file
    if (move_uploaded_file($temp, $destination)) {
        echo "File uploaded successfully";
    } else {
        echo "File upload failed";
    }
}
else
{
    echo "File size is Not allowed";
}

// Limit File Size and File Extensions

$extensions = array("jpg", "pdf");
$name_ext = explode(".", $_FILES['scertificate']['name']);
$ext = strtolower(end($name_ext));

if (!in_array($ext, $extensions))
    echo ("<br>File extension: $ext is not allowed");

if ($_FILES["stdimage"]['size'] > 50 * 1024)
{
    $extension = array("png", "pdf");
    $name_ext = explode(".", $_FILES["stdimage"]["name"]);
    $ext = strtolower(end($name_ext));

    if (!in_array($ext, $extension))
    {
        echo ("<br>File extension: $ext is not allowed");
    }
    else
    {
        // Move uploaded file
        if (move_uploaded_file($temp, $destination)) {
            echo "File uploaded successfully";
        } else {
            echo "File upload failed";
        }
    }
}
else
{
    echo "File size is Not allowed";
}
?>

<!-- Upload Multiple Files with Checks -->
<?php
if (!empty($_FILES['stdimage']['name'][0]))
{
    // Loop through multiple files
    for ($i = 0; $i < count($_FILES['stdimage']['name']); $i++)
    {
        echo "File Name: " . $_FILES['stdimage']['name'][$i];
        echo "<hr>";
        echo "File Size: " . $_FILES['stdimage']['size'][$i];
        echo "<hr>";
        echo "Temporary Name: " . $_FILES['stdimage']['tmp_name'][$i];
        echo "<hr>";
        echo "File Type: " . $_FILES['stdimage']['type'][$i];
        echo "<hr>";

        // Get temporary file
        $temp = $_FILES['stdimage']['tmp_name'][$i];

        // Destination folder
        $destination = "d:/PHP/New PHP_Update/Test/" .
                       $_FILES['stdimage']['name'][$i];

        // Check whether file already exists
        if (file_exists($destination))
            echo "Sorry, file already exists";
        else
        {
            // Check file size
            if ($_FILES['stdimage']['size'][$i] > 50 * 1024)
            {
                // Check file extension
                $extension = array("png", "pdf");
                $name_ext = explode(".", $_FILES['stdimage']['name'][$i]);
                $ext = strtolower(end($name_ext));

                if (!in_array($ext, $extension))
                    echo "File extension: $ext is not allowed";
                else
                {
                    // Move uploaded file
                    if (move_uploaded_file($temp, $destination))
                        echo "File uploaded successfully";
                    else
                        echo "File upload failed";
                }
            }
            else
                echo "File size is Not allowed";
        }
    }
}
else
    echo "No file is selected";
?>

</body>
</html>