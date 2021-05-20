<?php
if (isset($_POST['ubaci'])) {

$folder=$_POST['folder'];
mkdir("view/$folder");

header("Location: home.php");

}else {
echo "ERROR";
}
?>
