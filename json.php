<?php

function writeJson($show = false)
{
    $data = [
        [ 'countries' => ["Россия", "США", "Испания", "Австралия"]],
        ["США", "Испания", "Австралия", "Россия"],
        ["Россия", "США", "Испания", "Австралия"],
    ];
    $encoded = json_encode($data, JSON_UNESCAPED_UNICODE);
    if ($show) {
        echo $encoded;
    }
    file_put_contents('countries.json', $encoded);
}

function readJson()
{
    $data = file_get_contents('countries.json');
//    echo $data;
    echo "<br><br><pre>";
    $decoded = json_decode($data, true);
//    var_dump($decoded);
    print_r($decoded[0]['countries']);
}

//writeJson(true);
readJson();
