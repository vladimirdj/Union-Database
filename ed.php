<?php
$files=$_POST['files'];

if (isset($_POST['submit'])) {

$name = $_POST["name"];
$file = "$files";

$current = file_get_contents($files);

$current = "$name";
file_put_contents($file, $current);
header('Location:home.php');
}
?>
