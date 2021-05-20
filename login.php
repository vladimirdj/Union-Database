<?php
session_start();

if (isset($_POST['prijava'])) {
$korisnik = $_POST['korisnik'];
$password = $_POST['password'];


function getUser(){

$uzmi = file_get_contents('user.json');
$u = json_decode($uzmi,true);

return $u;
}
$u  = getUser();

foreach($u  as $us){

$_SESSION['korisnik']=$us['korisnik'];
$role=$us['role'];


if (($korisnik == $us['korisnik']) AND ($password == $us['password']) AND ($role == $us['role'])){
if($role=='admin'){
header('location:home.php');
}else if($role=='user'){

header('Location:user.php?korisnik='.base64_encode($_SESSION['korisnik']));
}
}else{
header('Location:nf.php');
}
}
}
?>
