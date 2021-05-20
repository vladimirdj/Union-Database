<?php

$folder=$_POST['folder'];

echo $folder;

$zip = new ZipArchive;
$zip->open("$folder.zip",  ZipArchive::CREATE);
$srcDir = "$folder";
$files= scandir($srcDir);
print_r($files);
unset($files[0],$files[1]);
foreach ($files as $file) {
$zip->addFile($srcDir.'\\'.$file, $file);
echo "bhandari";
}
$zip->close();

$file="$folder.zip";
if (headers_sent()) {
echo 'HTTP header already sent';
} else {
if (!is_file($file)) {
header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
echo 'File not found';
} else if (!is_readable($file)) {
header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
echo 'File not readable';
} else {
header($_SERVER['SERVER_PROTOCOL'].' 200 OK');
header("Content-Type: application/zip");
header("Content-Transfer-Encoding: Binary");
header("Content-Length: ".filesize($file));
header("Content-Disposition: attachment; filename=\"".basename($file)."\"");
while (ob_get_level()) {
ob_end_clean();
}
readfile($file);
exit;
}
}
?>
