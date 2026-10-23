<?php
// Chapter 4: Form processing, validation and file uploading.
require_once "functions.php";

// Redirect users who open this processing page without submitting the form.
if (!isset($_POST["submit"])) {
    echo "<h2>Please submit the registration form first.</h2>";
    echo '<a href="index.html">Back to Registration Form</a>';
    exit;
}

// Get submitted form values. isset() is used before reading optional controls.
$employeeName = isset($_POST["employee_name"]) ? trim($_POST["employee_name"]) : "";
$employeeID = isset($_POST["employee_id"]) ? trim($_POST["employee_id"]) : "";
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$department = isset($_POST["department"]) ? $_POST["department"] : "";
$employmentType = isset($_POST["employment_type"]) ? $_POST["employment_type"] : "";
$basicSalaryInput = isset($_POST["basic_salary"]) ? $_POST["basic_salary"] : "";
$allowanceInput = isset($_POST["allowance"]) ? $_POST["allowance"] : "";
$deductionInput = isset($_POST["deduction"]) ? $_POST["deduction"] : "";
$yearsInput = isset($_POST["years_service"]) ? $_POST["years_service"] : "";

$errors = "";

// Validate required text and choice fields.
if (empty($employeeName)) {
    $errors .= "<li>Employee full name must not be empty.</li>";
}
if (empty($employeeID)) {
    $errors .= "<li>Employee ID must not be empty.</li>";
}
if (empty($gender)) {
    $errors .= "<li>Please select a gender.</li>";
} elseif ($gender != "Male" && $gender != "Female") {
    $errors .= "<li>Please select a valid gender.</li>";
}
if (empty($department)) {
    $errors .= "<li>Please select a department.</li>";
} elseif ($department != "Human Resources" && $department != "Finance" &&
          $department != "Information Technology" && $department != "Administration") {
    $errors .= "<li>Please select a valid department.</li>";
}
if (empty($employmentType)) {
    $errors .= "<li>Please select an employment type.</li>";
} elseif ($employmentType != "Full-Time" && $employmentType != "Part-Time") {
    $errors .= "<li>Please select a valid employment type.</li>";
}

// Validate numeric fields. Empty strings are rejected, but numeric zero is allowed
// for allowance, deduction and years of service.
if ($basicSalaryInput === "" || !is_numeric($basicSalaryInput)) {
    $errors .= "<li>Basic salary must be a valid number greater than zero.</li>";
} elseif ((float)$basicSalaryInput <= 0) {
    $errors .= "<li>Basic salary must be greater than zero.</li>";
}

if ($allowanceInput === "" || !is_numeric($allowanceInput)) {
    $errors .= "<li>Allowance must be a valid number.</li>";
} elseif ((float)$allowanceInput < 0) {
    $errors .= "<li>Allowance cannot be negative.</li>";
}

if ($deductionInput === "" || !is_numeric($deductionInput)) {
    $errors .= "<li>Deduction must be a valid number.</li>";
} elseif ((float)$deductionInput < 0) {
    $errors .= "<li>Deduction cannot be negative.</li>";
}

if ($yearsInput === "" || !is_numeric($yearsInput)) {
    $errors .= "<li>Years of service must be a whole number zero or greater.</li>";
} elseif ((float)$yearsInput < 0) {
    $errors .= "<li>Years of service cannot be negative.</li>";
} elseif ((float)$yearsInput != (int)$yearsInput) {
    $errors .= "<li>Years of service must be a whole number.</li>";
}

// Convert validated numeric inputs to numbers for calculations.
$basicSalary = is_numeric($basicSalaryInput) ? (float)$basicSalaryInput : 0;
$allowance = is_numeric($allowanceInput) ? (float)$allowanceInput : 0;
$deduction = is_numeric($deductionInput) ? (float)$deductionInput : 0;
$yearsOfService = is_numeric($yearsInput) ? (int)$yearsInput : 0;

// Calculate salary values using the Chapter 3 functions.
$grossSalary = calculateGrossSalary($basicSalary, $allowance);
$bonus = calculateBonus($basicSalary);
$serviceBenefit = calculateServiceBenefit($basicSalary, $yearsOfService);
$employmentAllowance = calculateEmploymentAllowance($basicSalary, $employmentType);
$totalBenefits = calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance);
$availableSalary = $grossSalary + $totalBenefits;

// Deduction must not be greater than gross salary plus total benefits.
if (is_numeric($deductionInput) && $deduction > $availableSalary) {
    $errors .= "<li>Deduction cannot exceed Gross Salary plus Total Benefits.</li>";
}

$netSalary = calculateNetSalary($grossSalary, $totalBenefits, $deduction);
$salaryStatus = checkSalaryStatus($netSalary);
$annualSalary = calculateAnnualSalary($netSalary);

// Check that a document was selected and that the upload succeeded.
if (!isset($_FILES["employee_document"]) || $_FILES["employee_document"]["error"] == UPLOAD_ERR_NO_FILE) {
    $errors .= "<li>Please select an employee document.</li>";
} elseif ($_FILES["employee_document"]["error"] != UPLOAD_ERR_OK) {
    $errors .= "<li>The document could not be uploaded. Please try again.</li>";
}

// Only process file details when PHP reports a successful temporary upload.
$fileName = "";
$fileType = "";
$fileSize = 0;
$tempLocation = "";
$uploadStatus = "Not uploaded";
$destination = "";

if (isset($_FILES["employee_document"]) && $_FILES["employee_document"]["error"] == UPLOAD_ERR_OK) {
    // Retrieve the four file properties taught in Chapter 4.
    $fileName = basename($_FILES["employee_document"]["name"]);
    $fileType = $_FILES["employee_document"]["type"];
    $fileSize = $_FILES["employee_document"]["size"];
    $tempLocation = $_FILES["employee_document"]["tmp_name"];
    $destination = "uploads/" . $fileName;

    if ($fileSize > 2 * 1024 * 1024) {
        $errors .= "<li>The document is larger than 2 MB. Please choose a smaller file.</li>";
    } elseif (file_exists($destination)) {
        $errors .= "<li>A file with this name already exists. Rename your document and try again.</li>";
    }
}

// Show validation errors and do not move the file if any rule failed.
if (!empty($errors)) {
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Registration Errors</title>';
    echo '<style>body{font-family:Arial;background:#f2f5f9;padding:25px}.box{max-width:760px;margin:auto;background:white;padding:25px;border-radius:8px}h1{color:#a32020}</style>';
    echo '</head><body><div class="box"><h1>Please correct these errors</h1><ul>' . $errors . '</ul>';
    echo '<a href="index.html">Back to Registration Form</a></div></body></html>';
    exit;
}

// Save the uploaded file only after all validation checks pass.
// file_exists() was checked above, so an existing file will not be overwritten.
if (move_uploaded_file($tempLocation, $destination)) {
    $uploadStatus = "Uploaded successfully";
} else {
    echo '<h2>Upload error</h2><p>The document could not be saved. Check that the uploads folder exists and is writable.</p>';
    echo '<a href="index.html">Back to Registration Form</a>';
    exit;
}

// Escape text before showing it in HTML.
$employeeName = htmlspecialchars($employeeName, ENT_QUOTES, "UTF-8");
$employeeID = htmlspecialchars($employeeID, ENT_QUOTES, "UTF-8");
$gender = htmlspecialchars($gender, ENT_QUOTES, "UTF-8");
$department = htmlspecialchars($department, ENT_QUOTES, "UTF-8");
$employmentType = htmlspecialchars($employmentType, ENT_QUOTES, "UTF-8");
$fileNameDisplay = htmlspecialchars($fileName, ENT_QUOTES, "UTF-8");
$fileTypeDisplay = htmlspecialchars($fileType, ENT_QUOTES, "UTF-8");

// Display registration details and all salary calculations in an HTML table.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Registration Results</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f5f9; padding: 25px; color: #222; }
        .container { max-width: 900px; margin: auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 12px #0001; }
        h1 { color: #17365d; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ccd3dc; padding: 10px; text-align: left; }
        th { background: #17365d; color: white; }
        tr:nth-child(even) { background: #f5f7fa; }
        .back { display: inline-block; margin-top: 10px; background: #17365d; color: white; padding: 11px 16px; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">
    <h1>Employee Registration Results</h1>
    <p>Employee registration and document upload completed successfully.</p>
    <table>
        <tr><th>Information</th><th>Result</th></tr>
        <tr><td>Employee Name</td><td><?php echo $employeeName; ?></td></tr>
        <tr><td>Employee ID</td><td><?php echo $employeeID; ?></td></tr>
        <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
        <tr><td>Department</td><td><?php echo $department; ?></td></tr>
        <tr><td>Employment Type</td><td><?php echo $employmentType; ?></td></tr>
        <tr><td>Years of Service</td><td><?php echo $yearsOfService; ?></td></tr>
        <tr><td>Basic Salary</td><td>$<?php echo number_format($basicSalary, 2); ?></td></tr>
        <tr><td>Allowance</td><td>$<?php echo number_format($allowance, 2); ?></td></tr>
        <tr><td>Gross Salary</td><td>$<?php echo number_format($grossSalary, 2); ?></td></tr>
        <tr><td>Bonus</td><td>$<?php echo number_format($bonus, 2); ?></td></tr>
        <tr><td>Service Benefit</td><td>$<?php echo number_format($serviceBenefit, 2); ?></td></tr>
        <tr><td>Employment Allowance</td><td>$<?php echo number_format($employmentAllowance, 2); ?></td></tr>
        <tr><td>Total Benefits</td><td>$<?php echo number_format($totalBenefits, 2); ?></td></tr>
        <tr><td>Deduction</td><td>$<?php echo number_format($deduction, 2); ?></td></tr>
        <tr><td>Net Salary</td><td>$<?php echo number_format($netSalary, 2); ?></td></tr>
        <tr><td>Salary Status</td><td><?php echo $salaryStatus; ?></td></tr>
        <tr><td>Annual Salary</td><td>$<?php echo number_format($annualSalary, 2); ?></td></tr>
        <tr><td>Uploaded Document Name</td><td><?php echo $fileNameDisplay; ?></td></tr>
        <tr><td>Document Type</td><td><?php echo $fileTypeDisplay; ?></td></tr>
        <tr><td>Document Size</td><td><?php echo number_format($fileSize / 1024, 2); ?> KB</td></tr>
        <tr><td>Upload Status</td><td><?php echo $uploadStatus; ?></td></tr>
    </table>
    <a class="back" href="index.html">Back to Registration Form</a>
</div>
</body>
</html>
