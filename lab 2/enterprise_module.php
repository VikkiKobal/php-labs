<?php

$moduleFilePath = 'enterprises.csv';

if (!file_exists($moduleFilePath)) {
    $fileResource = fopen($moduleFilePath, 'w');
    if ($fileResource) {
        fputcsv($fileResource, ['code', 'name', 'employees', 'industry', 'address']);
        fclose($fileResource);
    }
}

// Функція для завантаження підприємств з файлу
function loadEnterprisesFromFile($filename)
{
    $enterprises = [];
    if (file_exists($filename)) {
        $fileResource = fopen($filename, 'r');
        if ($fileResource) {
            fgetcsv($fileResource);
            while (($data = fgetcsv($fileResource)) !== false) {
                if (count($data) >= 5) {
                    $enterprises[] = [
                        'code' => $data[0],
                        'name' => $data[1],
                        'employees' => (int) $data[2],
                        'industry' => $data[3],
                        'address' => $data[4],
                    ];
                }
            }
            fclose($fileResource);
        }
    }
    return $enterprises;
}

// Функція для збереження підприємств у файл
function saveEnterprisesToFile($filename, $enterprises)
{
    $fileResource = fopen($filename, 'w');
    if ($fileResource) {
        fputcsv($fileResource, ['code', 'name', 'employees', 'industry', 'address']);
        foreach ($enterprises as $enterprise) {
            fputcsv($fileResource, $enterprise);
        }
        fclose($fileResource);
    }
}
