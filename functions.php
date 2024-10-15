<?php
function displayEnterprises($enterprises)
{
    echo '<table>';
    echo '<tr>
            <th>Код</th>
            <th>Назва підприємства</th>
            <th>К-сть співробітників</th>
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

function getEnterprisesByIndustry($industry, $minEmployees, $maxEmployees, $enterprises)
{
    $result = [];
    foreach ($enterprises as $enterprise) {
        if (
            $enterprise['industry'] == $industry &&
            $enterprise['employees'] >= $minEmployees &&
            $enterprise['employees'] <= $maxEmployees
        ) {
            $result[] = $enterprise;
        }
    }
    return $result;
}
?>