<?php
if (isset($_POST['ubaci'])) {
$folder=$_POST['folder'];
$dir = "$folder";
foreach($dir as $f) {
if ($f->isDir()){
rmdir($f->getRealPath());
} else {
unlink($f->getRealPath());
}
}
header("Location: home.php");
rmdir($dir);
}else {
echo "ERROR";
}

?>
