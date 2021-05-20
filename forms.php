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
.raspon_5_of_2 {
width: 49.2%;
border: 2px solid  #3D6AAD;
}
.raspon_3_of_2 {
width: 100%;
border: 2px solid  #3D6AAD;
}
@media only screen and (max-width:480px) {
.raspon_3_of_2 {
width: 100%
}
.raspon_5_of_2 {
width: 100%
}
}
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
<h2>Forms & Functions</h2>
</div>
<div align="center">
<h2>Forms</h2>
</div>
<div class="sekcija2 grupa2">
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>Index</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;a href="add.php"&gt;Add&lt;/a&gt;
&lt;table class="responsive-table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;row1_name&lt;/th&gt;
&lt;th scope="col"&gt;row2_name&lt;/th&gt;
&lt;th scope="col"&gt;row3_name&lt;/th&gt;
&lt;th scope="col"&gt;row4_name&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;?php ... ?&gt;
&lt;tr&gt;
&lt;td data-title="row1"&gt;&lt;?php echo $row1-&gt;$row1_name; ?&gt;&lt;/td&gt;
&lt;td data-title="row2"&gt;&lt;?php echo $row1-&gt;$row2_name; ?&gt;&lt;/td&gt;
&lt;td data-title="row3"&gt;&lt;?php echo $row1-&gt;$row3_name; ?&gt;&lt;/td&gt;
&lt;td data-title="row4"&gt;&lt;?php echo $row1-&gt;$row4_name; ?&gt;&lt;/td&gt;
&lt;td data-title="action"&gt;
&lt;a href="view.php?id=&lt;?php echo $index; ?&gt;"&gt;View&lt;/a&gt; |
&lt;a href="edit.php?id=&lt;?php echo $index; ?&gt;"&gt;Edit&lt;/a&gt; |
&lt;a href="delete.php?id=&lt;?php echo $index; ?&gt;"&gt;delete&lt;/a&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</code>
</pre>
</div>

<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>Insert</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;form action="" method="post"&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Id:&lt;/label&gt;
&lt;input type="text" name="id" placeholder="Id"  class="form-input"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;First name:&lt;/label&gt;
&lt;input type="text" name="first_name" class="form-input"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Password:&lt;/label&gt;
&lt;input type="password" name="password" class="form-input"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Image:&lt;/label&gt;
&lt;input type="file" name="image" class="form-input"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Email:&lt;/label&gt;
&lt;input type="email" name="email" class="form-input"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Year&lt;/label&gt;
&lt;input type="date" name="date" class="form-input"&gt;
&lt;/div&gt;
&lt;br&gt;
&lt;div class="btn-group"&gt;
&lt;button type="submit" class="btn-3" &gt;POST&lt;/button&gt;
&lt;input type="button" class="btn-2" onclick="location.href='index.php';" value="Cancel"&gt;
&lt;/div&gt;
&lt;/form&gt;
</code>
</pre>
</div>
</div>
<div class="sekcija2 grupa2">
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>View</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;div id="container3"&gt;
&lt;table class="responsive-table"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;row1_name&lt;/th&gt;
&lt;th scope="col"&gt;row2_name&lt;/th&gt;
&lt;th scope="col"&gt;row3_name&lt;/th&gt;
&lt;th scope="col"&gt;row4_name&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;?php ... ?&gt;
&lt;tr&gt;
&lt;td data-title="row1"&gt;&lt;?php echo $row1-&gt;$row1_name; ?&gt;&lt;/td&gt;
&lt;td data-title="row2"&gt;&lt;?php echo $row1-&gt;$row2_name; ?&gt;&lt;/td&gt;
&lt;td data-title="row3"&gt;&lt;?php echo $row1-&gt;$row3_name; ?&gt;&lt;/td&gt;
&lt;td data-title="row4"&gt;&lt;?php echo $row1-&gt;$row4_name; ?&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class="btn-group"&gt;
&lt;div align="center"&gt;
&lt;input type="button" class="btn-2" onclick="location.href='index.php';" value="Back" /&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
</div>
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>Edit</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;form action="" method="post" enctype="multipart/form-data"&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;&lt;h2&gt;First name&lt;/h2&gt;&lt;/label&gt;
&lt;input type="text" name="first_name" class="form-input" value="&lt;?php echo $value["first_name"]; ?&gt;"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="thread_title"&gt;&lt;h2&gt;Password&lt;/h2&gt;&lt;/label&gt;
&lt;input type="password" name="password" class="form-input" value="&lt;?php echo $value["password"]; ?&gt;"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;&lt;h2&gt;Email&lt;/h2&gt;&lt;/label&gt;
&lt;input type="email" name="email" class="form-input" value="&lt;?php echo $value["email"];  ?&gt;"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;&lt;h2&gt;Date&lt;/h2&gt;&lt;/label&gt;
&lt;input type="date" class="form-input" name="date" value="&lt;?php echo $value["date"]; ?&gt;"&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="image"&gt;&lt;h2&gt;Image&lt;/h2&gt;
&lt;div align="center"&gt;
&lt;?php if (isset($vlaue['extension'])): ?&gt;
&lt;img src="&lt;?php echo "images/{$vlaue['id']}.{$vlaue['extension']}" ?&gt;"&gt;
&lt;?php endif; ?&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="image"&gt;&lt;h2&gt;New Image&lt;/h2&gt;&lt;/label&gt;
&lt;input type="file"  name="image" class="form-input"&gt;
&lt;/div&gt;
&lt;div class="btn-group"&gt;
&lt;br&gt;
&lt;div align="center"&gt;
&lt;input type="button" class="btn-2" onclick="location.href='index.php';" value="Cancel"&gt;
&lt;input type="submit" class="btn-1" name="edit_post" value="Edit Post"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;
</code>
</pre>

</div>
</div>
<br>
<div align="center">
<h2>Functions</h2>
</div>
<div class="sekcija2 grupa2">
<div class="colona2 raspon_3_of_2">
<div align="center">
<h2>Index</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;table class="responsive-table"&gt;
&lt;thead&gt;
&lt;tr&gt;...&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;?php
$get_user = file_get_contents('value.json');
$get = json_decode($get_user);
$value = 0;
if(!empty($get)){
foreach($get as $row1){
?&gt;
&lt;tr&gt;
&lt;td data-title="row1"&gt;&lt;?php echo $row1-&gt;id; ?&gt;...&lt;/td&gt;
&lt;td&gt;
&lt;a href="view.php?id=&lt;?php echo $row1-&gt;id; ?&gt;"&gt;View&lt;/a&gt; |
&lt;a href="edit.php?edit_id=&lt;?php  echo $value; ?&gt;"&gt;Edit&lt;/a&gt; |
&lt;a href="delete.php?delete_id=&lt;?php echo $value; ?&gt;"&gt;delete&lt;/a&gt;
&lt;/td&gt;
&lt;/tr&gt;
&lt;?php
$value++;
}
}
?&gt;
</code>
</pre>
</div>
</div>
<br>
<div class="sekcija2 grupa2">
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>Insert</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;?php
if(isset($_POST['"name"'])){
$ins_value = file_get_contents('value.json');
$insert = json_decode($ins_value, true);
$add_arr = array(
'vlaue' =&gt; $_POST['vlaue'],
);
$insert[] = $add_arr;
$insert = json_encode($insert, JSON_PRETTY_PRINT);
file_put_contents('value.json', $data);
header('location: index.php');
}
?&gt;
&lt;form method="post"&gt;...&lt;/form&gt;
</code>
</pre>
</div>
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>Edit</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;?php
$id = $_GET['id'];
$edit = file_get_contents('value.json');
$data_array = json_decode($edit, true);
$row = $data_array[$id];
if(isset($_POST['"name"']))
{
$update_arr = array(
'id' =&gt; $_POST['id'],
'value' =&gt; $_POST['value'],
);
$data_array[$id] = $update_arr;
$edit = json_encode($data_array, JSON_PRETTY_PRINT);
file_put_contents('value.json', $data);
header('location: index.php');
}
?&gt;
&lt;form method="post"&gt;...&lt;/form&gt;
</code>
</pre>
</div>
</div>
<div class="sekcija2 grupa2">
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>View</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;table class="responsive-table"&gt;
&lt;thead&gt;
&lt;tr&gt;...&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;?php
&lt;?php
$id = $_GET['id'];
$view = file_get_contents('user.json');
$get = json_decode($view);
$index = 1;
if(!empty($get)){
foreach($get as $row1){
if ($row1-&gt;id == $id){
$row1 = $row1;
?&gt;
&lt;tr&gt;
&lt;td data-title="row1"&gt;&lt;?php echo $row1-&gt;id; ?&gt;...&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
</code>
</pre>
</div>
<div class="colona2 raspon_5_of_2">
<div align="center">
<h2>Delete</h2>
</div>
<pre data-lang="PHP">
<code>
&lt;?php
$id = $_GET['id'];
$data = file_get_contents('value.json');
$data = json_decode($data, true);
unset($data[$id]);
$data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('value.json', $data);
header('location: index.php');
?&gt;
</code>
</pre>
</div>
</div>
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
