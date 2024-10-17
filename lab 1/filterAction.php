<?php
if (
    array_key_exists('industry', $_GET) && !empty($_GET['industry']) &&
    array_key_exists('minEmployees', $_GET) && !empty($_GET['minEmployees']) &&
    array_key_exists('maxEmployees', $_GET) && !empty($_GET['maxEmployees'])
) {
    $industry = $_GET['industry'];
    $minEmployees = (int) $_GET['minEmployees'];
    $maxEmployees = (int) $_GET['maxEmployees'];

    $enterprises = filterEnterprices($enterprises, $industry, $minEmployees, $maxEmployees);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        array_key_exists('code', $_POST) &&
        array_key_exists('name', $_POST) &&
        array_key_exists('employees', $_POST) &&
        array_key_exists('industry', $_POST) &&
        array_key_exists('address', $_POST)
    ) {

        $enterprises[] = [
            'code' => $_POST['code'],
            'name' => $_POST['name'],
            'employees' => (int) $_POST['employees'],
            'industry' => $_POST['industry'],
            'address' => $_POST['address'],
        ];
    }
}


