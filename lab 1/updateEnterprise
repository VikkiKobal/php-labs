<?php
function updateEnterprise(&$enterprises, $code, $name, $employees, $industry, $address)
{
    foreach ($enterprises as &$enterprise) {
        if ($enterprise['code'] === $code) {
            $enterprise['name'] = $name;
            $enterprise['employees'] = $employees;
            $enterprise['industry'] = $industry;
            $enterprise['address'] = $address;
            break;
        }
    }
}
?>
