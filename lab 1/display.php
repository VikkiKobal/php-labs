<?php
include 'data.php';

function displayEnterprises($enterprises)
{
    echo '<table border="1">';
    echo '<tr>
            <th>Код</th>
            <th>Назва підприємства</th>
            <th>Кількість співробітників</th>
            <th>Галузь</th>
            <th>Адреса</th>
          </tr>';
    foreach ($enterprises as $enterprise) {
        echo '<tr>
                    <td>' . $enterprise['code'] . '</td>
                    <td>' . $enterprise['name'] . '</td>
                    <td>' . $enterprise['employees'] . '</td>
                    <td>' . $enterprise['industry'] . '</td>
                    <td>' . $enterprise['address'] . '</td>
                  </tr>';
    }
    echo '</table>';
}
?>
