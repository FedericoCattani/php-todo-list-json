<?php
$tasks = file_get_contents('index.php');
$tasksPHP = json_decode($tasks);
array_push($objectPHP, []);
echo json_encode($object);
print_r($objectPHP);
var_dump($tasksPHP);
