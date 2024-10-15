<?php
include 'data.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['code'];
    $newData = [
        'name' => $_POST['name'],
        'employees' => (int) $_POST['employees'],
        'industry' => $_POST['industry'],
        'address' => $_POST['address']
    ];

    foreach ($enterprises as &$enterprise) {
        if ($enterprise['code'] == $code) {
            $enterprise = array_merge($enterprise, $newData);
            break;
        }
    }

    displayEnterprises($enterprises);
} else {
    $code = $_GET['code'];
    foreach ($enterprises as $enterprise) {
        if ($enterprise['code'] == $code) {
            echo '<form action="edit.php" method="post">
                    <label for="code">Code:</label>
                    <input type="hidden" id="code" name="code" value="' . $enterprise['code'] . '">
                    <label for="name">Name:</label>
                    <input type="text" id="name " name="name" value="' . $enterprise['name'] . '"><br><br>
                    <label for="employees">Employees:</label>
                    <input type="number" id="employees" name="employees" value="' . $enterprise['employees'] . '"><br><br>
                    <label for="industry">Industry:</label>
                    <input type="text" id="industry" name="industry" value="' . $enterprise['industry'] . '"><br><br>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="' . $enterprise['address'] . '"><br><br>
                    <input type="submit" value="Edit Enterprise">
                  </form>';
            break;
        }
    }
}
?>
