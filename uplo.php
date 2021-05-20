<?php

if (($_FILES['my_file']['name']!="")){
$folder=$_POST['folder'];
$target_dir = "$folder/";
$file = $_FILES['my_file']['name'];
$path = pathinfo($file);
$filename = $path['filename'];
$ext = $path['extension'];
$temp_name = $_FILES['my_file']['tmp_name'];
$path_filename_ext = $target_dir.$filename.".".$ext;

if (file_exists($path_filename_ext)) {
echo "Sorry, file already exists.";
}else{
move_uploaded_file($temp_name,$path_filename_ext);
echo "Congratulations! File Uploaded Successfully.";
header("Location: home.php");
}
}
?>
