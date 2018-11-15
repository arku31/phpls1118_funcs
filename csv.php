<?php
function writeCsv()
{
    $data = [
        ["Россия", "США", "Испания", "Австралия"],
        ["США", "Испания", "Австралия", "Россия"],
        ["Россия", "США", "Испания", "Австралия"],
    ];
    $fp = fopen('./test.csv', 'w');
    //w - Открывает файл только для записи; помещает указатель в начало файла и обрезает файл до нулевой длины.
    // Если файл не существует - пробует его создать.
    //http://php.net/manual/ru/function.fopen.php
    foreach ($data as $fields) {
        fputcsv($fp, $fields, ';');
    }
    fclose($fp);
    echo 'Файл успешно записан';
}

function readCsv()
{
    $csvPath = './test.csv';
    $csvFile = fopen($csvPath, "r"); //r = чтение с начала
    if ($csvFile) {
        $res = [];
        while (($csvData = fgetcsv($csvFile, 100, ";")) !== false) {
            $res[] = $csvData;
        }
        echo '<pre>';
        print_r($res);
    }
}

//writeCsv();
readCsv();
