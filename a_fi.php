<?php
if (isset($_POST['ubaci'])) {
$folder=$_POST['folder'];
$files=$_POST['files'];
$dir = "$folder";

$file_to_write = "$files";

if( is_dir($dir) === false )
{
mkdir($dir);
}

$file = fopen($dir . '/' . $file_to_write,"w");


fclose($file);

include $dir . '/' . $file_to_write;
header("Location: home.php");
}else {
echo "ERROR";
}

?>
