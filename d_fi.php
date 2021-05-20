<?php
if (isset($_POST['ubaci'])) {
$files=$_POST['files'];
unlink($files);
echo "<script>alert('Delete!')</script>";
echo "<script>window.history.go(-3);</script>";
}
?>
