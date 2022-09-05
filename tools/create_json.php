<?php
/*
 * This is simple generator used to create domains.json file from domans.txt
 */

$input = file('../domains.txt',FILE_IGNORE_NEW_LINES);
$json = json_encode($input,JSON_PRETTY_PRINT);
file_put_contents('../domains.json',$json);

echo "DONE";
