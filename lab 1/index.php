<!DOCTYPE html>
<html lang="uk">
<link rel="stylesheet" type="text/css" href="style.css">

<head>
    <meta charset="UTF-8">
    <title>Підприємства</title>
</head>

<body>

    <h1>Список підприємств</h1>

    <form method="GET" action="filter.php">
        <label for="industry">Галузь:</label>
        <input type="text" name="industry" id="industry" required>
        <label for="min_employees">Мін. кількість співробітників:</label>
        <input type="number" name="min_employees" id="min_employees" required>
        <label for="max_employees">Макс. кількість співробітників:</label>
        <input type="number" name="max_employees" id="max_employees" required>
        <button type="submit">Фільтрувати</button>
    </form>

    <?php include 'filter.php'; ?>
    <h2>Додати нове підприємство</h2>
    <form method="POST" action="add.php">
        <label for="code">Код:</label>
        <input type="text" name="code" id="code" required>
        <label for="name">Назва підприємства:</label>
        <input type="text" name="name" id="name" required>
        <label for="employees">Кількість співробітників:</label>
        <input type="number" name="employees" id="employees" required>
        <label for="industry">Галузь:</label>
        <input type="text" name="industry" id="industry" required>
        <label for="address">Адреса:</label>
        <input type="text" name="address" id="address" required>
        <button type="submit">Додати</button>
    </form>

</body>

</html>
