<?php

include_once 'updateEnterprise.php';

$isEditing = false;
$editingEnterprise = [];

if (isset($_GET['edit'])) {
    $code = $_GET['edit'];

    foreach ($enterprises as $enterprise) {
        if ($enterprise['code'] === $code) {
            $isEditing = true;
            $editingEnterprise = $enterprise;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $employees = (int) $_POST['employees'];
    $industry = $_POST['industry'];
    $address = $_POST['address'];

    if ($isEditing) {
        updateEnterprise($enterprises, $code, $name, $employees, $industry, $address);
    } else {
        $enterprises[] = [
            'code' => $code,
            'name' => $name,
            'employees' => $employees,
            'industry' => $industry,
            'address' => $address,
        ];
    }
}
?>
