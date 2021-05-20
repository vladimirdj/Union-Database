<?php
session_start();

if (isset($_SESSION['korisnik'])){

function getUser(){
$uzmi = file_get_contents('user.json');
$test = json_decode($uzmi,true);

return $test ;
}

$test = getUser();

foreach($test  as $vlada){
$_SESSION['korisnik'] =$vlada['korisnik'];
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Union Database</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/union.css">
<style>
body {
margin: 0;
padding: 0;

max-width:  100%;
}


@media screen and (min-width: 550px) {

body {
margin-left: 200px;
}
body.non-margin {
margin-left: 0px !important;
}
.klizac {
z-index: 10;
width: 200px;
}
.klizac.aktivan {
width: 0px;
}

}

@media screen and (min-width: 550px) {

body {
margin-right: 200px;
}
body.non {
margin-right: 0px !important;
}

.desno {
z-index: 10;
width: 200px;
}
.desno.aktivan {
width: 0px;
}

}


</style>
</head>
<body>
<header>

<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="home.php" class="link">Home</a>
<a href="folder.php"class="link">Folder</a>
<a href="forms.php"class="link">Forms</a>
</div>
</nav>

</div>
</header>
<div class="klizac">
<div align="center">
<div class="logo">

<h3> Sensation Energy </h3>
</div>

</div>
<br>
<div class="vlada">
<h3>Hi:  <a href="user.php?korisnik=<?php echo base64_encode($_SESSION['korisnik']) ?>"  class="link3"><?php echo $_SESSION['korisnik']; ?></a></h3>
<h3><a href="logout.php"  class="link2">Logout</a></h3>
</div>
<br>
<div align="center">
<h2>Menu tree</h2>
</div>
<div id="hierarchy">

<?php
$mainDir = 'view';

$subDirectories = scandir($mainDir);

unset($subDirectories[0]);
unset($subDirectories[1]);

foreach($subDirectories as $subDirectory) {
?>
<div class="foldercontainer">
<span class="folder fa-folder-open" data-isexpanded="true">

<a href='<?php echo $subDirectory; ?>'><?php echo $subDirectory; ?></a> | <?php echo $subDirectory; ?><br />
</span>

<?php
foreach(glob($mainDir.'/'.$subDirectory.'/*') as $file) {
?>
<div class="foldercontainer">
<span class="file fa-folder-o" data-isexpanded="true">

<a href='<?php echo $file; ?>'><?php echo $file; ?></a><br />
</span>
</div>
<?php } ?>


</div>
<?php } ?>
</div>
</div>
</div>

<div class="desno">

<div align="center">
<div class="logo">

<h3> Sensation Energy </h3>
</div>
<br>

<div align="center">
<h2>Web service</h2>
</div>
<div class="card">
<ul class="list-unstyled">
<li><a href="rest.php">URL </a></li>
<li><a href="select.php">Select </a></li>
<li><a href="upl.php">Upload </a></li>
<li><a href="rid.php">ID </a></li>
</ul>
</div>
<br>
</div>
<div align="center">
<h2>Reports</h2>
</div>
<div class="card">
<ul class="list-unstyled">
<li><a href="report.php">Report </a></li>

</ul>
</div>
<br>
<div align="center">
<h2>Examples</h2>
</div>
<div class="card">
<ul class="list-unstyled">
<li><a href="view/crud/sel.php">Select example</a></li>
<li><a href="view/crud2/index.php">Crud example</a></li>
</ul>
</div>
<br>
</div>


<div clas="telo">
<br>
<div align="center">
<h1>Union Database</h1>
</div>
<br>
<button class="dugme">
<i class="fa fa-bars"></i>
</button>
<button class="dugme1">
<i class="fa fa-bars"></i>
</button>
<br>
<div align="center">
<h2>News</h2>
</div>
<br>
<form action="d_fi.php" method="post">
<div class="form-group">
<label for="files"><h2>Files</h2></label>
<div>
<select name="files" id="files" class="form-input">
<?php
if (isset($_POST['ubaci'])) {
$folder=$_POST['folder'];
if ($handle = opendir("$folder")) {
while (false !== ($entry = readdir($handle))) {
if ($entry != "." && $entry != "..") {
echo "<option value='$folder/$entry'>$folder/$entry</option>";
}
}
closedir($handle);
}
}
?>
</select>
</div>
</div>
<br>
<div class="btn-group">
<div align="center">
<button class="btn-11" type="submit" name="ubaci">Delete</button>
</div>
</div>
</form>
<br><br>
<button onclick="topFunction()" id="Btn" title="Go to top">Top</button>
<div class="footer">
Copyright @ Sensation Energy
<?php echo date("Y");?>. All Rights Reserved.
</div>
</div>
<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
} ?>
<script>
var hierarchy = document.getElementById("hierarchy");
hierarchy.addEventListener("click", function(event){
var elem = event.target;
if(elem.tagName.toLowerCase() == "span" && elem !== event.currentTarget)
{
var type = elem.classList.contains("folder") ? "folder" : "file";
if(type=="file")
{
alert("File accessed");
}
if(type=="folder")
{
var isexpanded = elem.dataset.isexpanded=="true";
if(isexpanded)
{
elem.classList.remove("fa-folder-o");
elem.classList.add("fa-folder");
}
else
{
elem.classList.remove("fa-folder");
elem.classList.add("fa-folder-o");
}
elem.dataset.isexpanded = !isexpanded;

var toggleelems = [].slice.call(elem.parentElement.children);
var classnames = "file,foldercontainer,noitems".split(",");

toggleelems.forEach(function(element){
if(classnames.some(function(val){return element.classList.contains(val);}))
element.style.display = isexpanded ? "none":"block";
});
}
}
});
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/union.js"></script>
</body>
</html>
