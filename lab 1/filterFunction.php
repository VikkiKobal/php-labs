<?php
function filterEnterprices($enterprises, $industry, $minEmployees, $maxEmployees)
{
    $filteredEnterprises = [];
    foreach ($enterprises as $enterprise) {
        if (
            strtolower($enterprise['industry']) === strtolower($industry) &&
            $enterprise['employees'] >= $minEmployees &&
            $enterprise['employees'] <= $maxEmployees
        ) {
            $filteredEnterprises[] = $enterprise;
        }
    }
    return $filteredEnterprises;
}
