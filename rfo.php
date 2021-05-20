<?php
$dir=$_POST['dir'];

if (isset($_POST['submit'])) {

$newdir = $_POST["newdir"];
rename("$dir","$newdir");
echo "<script>window.history.back(-2);</script>";
}
?>
