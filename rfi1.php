<?php
$files=$_POST['files'];
echo $files;

if (isset($_POST['submit'])) {

$nefiles= $_POST["nefiles"];
rename("$files","$nefiles");
echo "<script>window.location.replace('home.php');</script>";
}
?>
