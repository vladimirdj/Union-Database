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
.container3 {
overflow-x: auto;
width: 100%;
}
@media (min-width: 48em) {
.container3 {
margin: 2%;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
}
@media (min-width: 75em) {
.container3 {
margin: 2em auto;
max-width: 100%;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
}

.responsive-table {
width: 100%;
margin-bottom: 1.5em;
border-spacing: 0;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
@media (min-width: 48em) {
.responsive-table {
font-size: .9em;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
}
@media (min-width: 62em) {
.responsive-table {
font-size: 1em;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
}
.responsive-table thead {
position: absolute;
clip: rect(1px 1px 1px 1px);

padding: 0;
border: 0;
height: 1px;
width: 1px;
overflow: hidden;

box-shadow: 0 4px 8px 0 #3D6AAD;
}
@media (min-width: 48em) {
.responsive-table thead {
position: relative;
clip: auto;
height: auto;
width: auto;
overflow: auto;
}
}
.responsive-table thead th {
background-color: #2c2f33;
border: 1px solid #3D6AAD;
font-weight: normal;
text-align: center;
color: #fe5026;
border: 1px solid #3D6AAD;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
.responsive-table thead th:first-of-type {
text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
display: block;
padding: 0;
text-align: left;
white-space: normal;
}
@media (min-width: 48em) {
.responsive-table tr {
display: table-row;
}
}
.responsive-table th,
.responsive-table td {
padding: .5em;
vertical-align: middle;
}
@media (min-width: 30em) {
.responsive-table th,
.responsive-table td {
padding: .75em .5em;
}
}
@media (min-width: 48em) {
.responsive-table th,
.responsive-table td {
display: table-cell;
padding: .5em;
}
}
@media (min-width: 62em) {
.responsive-table th,
.responsive-table td {
padding: .75em .5em;
}
}
@media (min-width: 75em) {
.responsive-table th,
.responsive-table td {
padding: .75em;
}
}
.responsive-table caption {
margin-bottom: 1em;
font-size: 1em;
font-weight: bold;
text-align: center;
}
@media (min-width: 48em) {
.responsive-table caption {
font-size: 1.5em;
}
}
.responsive-table tfoot {
font-size: .8em;
font-style: italic;
}
@media (min-width: 62em) {
.responsive-table tfoot {
font-size: .9em;
}
}
@media (min-width: 48em) {
.responsive-table tbody {
display: table-row-group;
}
}
.responsive-table tbody tr {
margin-bottom: 1em;
}
@media (min-width: 48em) {
.responsive-table tbody tr {
display: table-row;
border-width: 1px;
}
}
.responsive-table tbody tr:last-of-type {
margin-bottom: 0;
}
@media (min-width: 48em) {
.responsive-table tbody tr:nth-of-type(even) {
background-color: #2c2f33;
}
}
.responsive-table tbody th[scope="row"] {
background-color: #2c2f33;
color: white;
}
@media (min-width: 30em) {
.responsive-table tbody th[scope="row"] {
border: 1px solid #3D6AAD;

}
}
@media (min-width: 48em) {
.responsive-table tbody th[scope="row"] {
background-color: transparent;
color: #fe5026;
text-align: left;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
}
.responsive-table tbody td {
text-align: right;
}
@media (min-width: 48em) {
.responsive-table tbody td {

border: 1px solid#3D6AAD;
text-align: center;
}
}
@media (min-width: 48em) {
.responsive-table tbody td:last-of-type {
border: 1px solid #3D6AAD;
}
}
.responsive-table tbody td[data-type=currency] {
text-align: right;
}
.responsive-table tbody td[data-title]:before {
content: attr(data-title);
float: left;
font-size: .8em;
color:  #fe5026;
}
@media (min-width: 30em) {
.responsive-table tbody td[data-title]:before {
font-size: .9em;
}
}
@media (min-width: 48em) {
.responsive-table tbody td[data-title]:before {
content: none;
}
}
table {
border-collapse: collapse;
width: 100%;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th {
background-color: #2c2f33;
border: 1px solid #3D6AAD;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th:hover {
background-color: #2c2f33;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th a {
display: block;
text-decoration:none;
padding: 10px;
color: #fe5026;
font-weight: bold;
font-size: 13px;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th a i {
margin-left: 5px;
color: #fe5026;
}
td {
padding: 10px;
color: #fe5026;
border: 1px solid #3D6AAD;
}
tr {
background-color: #2c2f33;
}
tr .highlight {
background-color: #2c2f33;
}

</style>
</head>
<body>
<header>

<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<div class="left">
          <a href="home.php" class="link">Home</a>
  <a href="folder.php"class="link">Folder</a>
  <a href="forms.php"class="link">Forms</a>
  <a href="../../u_d/index.php"class="link">Documentation</a>
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
<h2>Report</h2>
</div>
<br>
<?php


if(isset($_GET["search_button"]))
{
$search=$_GET['search'];


if($search=="")
{
echo "<center><h1><b>Please Write Something In search Box</b></h1></center>";
exit();
}
}

?>
<div id="container3">
<table id="simpleTable1" class="responsive-table">
<thead>

<tr>

<th scope="col">User_id</th>
<th scope="col">Name</th>
<th scope="col">User</a></th>
<th scope="col">Email</th>

</tr>

</thead>


<tbody>

<?php
$user_id = $_GET['user_id'];
$data = file_get_contents('user.json');
$data = json_decode($data);
$index = 1;
if(!empty($data)){
foreach($data as $row1){

if ($row1->user_id == $user_id){
$row1 = $row1;
?>

<tr>

<td data-title="row1"><?php echo $row1->user_id; ?></td>
<td data-title="row2"><?php echo $row1->first_name; ?></td>
<td data-title="row3"><?php echo $row1->korisnik; ?></td>
<td data-title="row4"><?php echo $row1->email; ?></td>

</tr>
<?php
} }
}
?>
</tbody>
</table>
</div>
<br>
<button id="button-excel" class="btn-9">Create Excel</button>
<form id="form1">
<input type="button" class="btn-10" value="Print" id="btnPrint" />
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
<script src='https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js'></script><script  src="./script.js"></script>

<script>
let button = document.querySelector("#button-excel");

button.addEventListener("click", e => {
let table = document.querySelector("#simpleTable1");
TableToExcel.convert(table);
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$("#btnPrint").live("click", function () {
var divContents = $("#container3").html();
var printWindow = window.open('', '', 'height=400,width=800');
printWindow.document.write('<html><head><title>DIV Contents</title>');
printWindow.document.write('</head><body >');
printWindow.document.write(divContents);
printWindow.document.write('</body></html>');
printWindow.document.close();
printWindow.print();
});
</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="union.js"></script>
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

</body>
</html>
