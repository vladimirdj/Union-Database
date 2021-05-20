<?php
$allow = array("json");

$todir = 'view/';

if ( !!$_FILES['file']['tmp_name'] ) // is the file uploaded yet?
{

$info = explode('.', strtolower( $_FILES['file']['name']) ); // whats the extension of the file
if ( in_array( end($info), $allow) ) // is this file allowed
{
if (file_exists($_FILES['file']['name'])) {
echo "Sorry, file already exists.";
}else{
if ( move_uploaded_file( $_FILES['file']['tmp_name'],  $todir . basename($_FILES['file']['name'] ) ) )
{

echo "the file has been upload";
}
}
}
else
{
echo "error - only json files";
}

}

?>
