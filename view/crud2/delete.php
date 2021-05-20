<?php
$d_id = $_GET['d_id'];

$de = file_get_contents('test.json');
$de = json_decode($de, true);

unset($de[$d_id]);

$de = json_encode($de, JSON_PRETTY_PRINT);
file_put_contents('test.json', $de);

header('location: index.php');
?>
