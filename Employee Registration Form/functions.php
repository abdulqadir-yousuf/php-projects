<?php
// Chapter 3: Functions, parameters, arguments, return values and default arguments.

// Gross salary = basic salary + allowance.
function calculateGrossSalary($basicSalary, $allowance)
{
    return $basicSalary + $allowance;
}

// Bonus depends on the employee's basic salary.
function calculateBonus($basicSalary)
{
    if ($basicSalary >= 1000) {
        return $basicSalary * 0.10;
    } elseif ($basicSalary >= 500) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}

// Service benefit depends on years of service.
function calculateServiceBenefit($basicSalary, $yearsOfService)
{
    if ($yearsOfService >= 5) {
        return $basicSalary * 0.08;
    } elseif ($yearsOfService >= 3) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}

// Employment allowance depends on Full-Time or Part-Time status.
function calculateEmploymentAllowance($basicSalary, $employmentType)
{
    if ($employmentType == "Full-Time") {
        return $basicSalary * 0.06;
    } elseif ($employmentType == "Part-Time") {
        return $basicSalary * 0.03;
    } else {
        return 0;
    }
}

// Total benefits = bonus + service benefit + employment allowance.
function calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance)
{
    return $bonus + $serviceBenefit + $employmentAllowance;
}

// Net salary = gross salary + total benefits - deduction.
function calculateNetSalary($grossSalary, $totalBenefits, $deduction)
{
    return $grossSalary + $totalBenefits - $deduction;
}

// Classify salary using the calculated net salary.
function checkSalaryStatus($netSalary)
{
    if ($netSalary >= 1500) {
        return "High Salary";
    } elseif ($netSalary >= 800) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}

// Default argument: if no months value is supplied, use 12 months (one year).
function calculateAnnualSalary($netSalary, $months = 12)
{
    return $netSalary * $months;
}
?>
