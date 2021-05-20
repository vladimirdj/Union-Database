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
<h2>How to create CRUD</h2>
</div>
<br>
<h2>How to create CRUD</h2>
<ul>
<li>1. First go to "Folder" on menu</li>
<li>2. Push the button "Add folder", next give the name to the loder exp "crud2"</li>
<li>3. Again go to the folder folder adn push the button "Add files" </li>
<li>5. When you have created, you need to first go to the folder page and then click on the edit files button and select test.json in the selection and insert the code that you previously copied from here.</li>
<li>6. It is necessary to first create an json foil and name it for example test.json</li>
<pre data-lang="JSON">
<code>
[
{
"id": 2,
"name": "admin"
},
{
"id": 3,
"name": "test"
}
]
</code>
</pre>
<li>7. In the page "Add files" add files and select folder "crud2" on Folder</li>
<li>8. Add files: <li>
<ul>
<ol>index.php</ol>
<ol>add.php</ol>
<ol>view.php</ol>
<ol>edit.php</ol>
<ol>delete.php</ol>
</ul>
<li>9. When we have added the files, we go again with the folder button, and after that we select "edit files", and on the edit page you select crud2 from the selection, after that we first select indes.php, and then press edit. That's where we write the code. We will do the same for all other files.</li>
<li>10. Writing code:</li>
<ul>
<ol> a) Frist go to button FORMS</ol>
<ol> b) Next copy index code form forms and paste in index.php on page edit files.</ol>
<ol> c) Next copy index code form functions and paste in index.php </ol>
<ol> d) Of course you need to adjust the php code in relation to the form you want. Do you want more rows. You must first set as many rows as you want in the form, and then in function. First you have to write in JSON data, and in relation to that it sorts you everything else </ol>
<ol> e) This is how you created indes.php </ol>
<ol> f) So you will do for other DELETE, EDIT, ADD and VIEW </ol>
<ol> g) You will take the appropriate form for VIEW, EDIT, ADD and DELETE from the forms, go to the FOLDER page and select edit and then select VIEW, EDIT, ADD and DELETE in the selection and copy the forms you previously created according to your wishes. and after that you will copy the functions in the same way</ol>
</ul>
<li>11. How to make form and function</li>
<ul>
<ol> a) On the Forms & Functions page, for example, take INDES and add as many lines as you want in <'th'> and then in <'td'> do the same and add the names as they will be called (first name, email, password, ..) which you have previously done it in JSON and then you will copy it to the edit page in the indes.php selection</ol>
<ol> b) We do the function as well as the form, we copy and paste. means when copying a form for example in indes.php to < ?php ...?> should be copied from the indes.php function and pasted there. You must first adjust the data in <th> to match <'tr'> from the form and JSON. You will then copy it to the edit page in the indes.php selection</ol>
<ol> c) When the set is made (copy paste all the parts from the CRUD so you get a com, a flat side and a crud.</ol>
</ul>
</ul>
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
