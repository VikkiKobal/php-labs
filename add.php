<?php
include 'data.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newEnterprise = [
        'code' => $_POST['code'],
        'name' => $_POST['name'],
        'employees' => (int) $_POST['employees'],
        'industry' => $_POST['industry'],
        'address' => $_POST['address']
    ];

    $enterprises[] = $newEnterprise;

    displayEnterprises($enterprises);
} else {
    echo '<form action="add.php" method="post">
            <label for="code">Code:</label>
            <input type="text" id="code" name="code"><br><br>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="employees">Employees:</label>
            <input type="number" id="employees" name="employees"><br><br>
            <label for="industry">Industry:</label>
            <input type="text" id="industry" name="industry"><br><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address"><br><br>
            <input type="submit" value="Add Enterprise">
          </form>';
}
?>