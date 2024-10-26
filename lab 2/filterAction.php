<?php

include_once 'enterprise_module.php';
include_once 'updateEnterprise.php';

$moduleFilePath = 'enterprises.csv';

$enterprises = loadEnterprisesFromFile($moduleFilePath);

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

// Обробка POST запиту для додавання або редагування підприємства
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
    saveEnterprisesToFile($moduleFilePath, $enterprises);
}

// Фільтрація підприємств
$filteredEnterprises = $enterprises;

if (isset($_GET['industry']) && isset($_GET['minEmployees']) && isset($_GET['maxEmployees'])) {
    $industry = $_GET['industry'];
    $minEmployees = (int) $_GET['minEmployees'];
    $maxEmployees = (int) $_GET['maxEmployees'];

    $filteredEnterprises = filterEnterprices($enterprises, $industry, $minEmployees, $maxEmployees);
}
