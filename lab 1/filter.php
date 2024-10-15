<?php
include 'data.php';
include 'functions.php';

$filtered_enterprises = $enterprises;

if (isset($_GET['industry']) && isset($_GET['min_employees']) && isset($_GET['max_employees'])) {
    $industry = $_GET['industry'];
    $min_employees = (int) $_GET['min_employees'];
    $max_employees = (int) $_GET['max_employees'];

    $filtered_enterprises = array_filter($enterprises, function ($enterprise) use ($industry, $min_employees, $max_employees) {
        return $enterprise['industry'] === $industry &&
            $enterprise['employees'] >= $min_employees &&
            $enterprise['employees'] <= $max_employees;
    });
}

displayEnterprises($filtered_enterprises);
?>
