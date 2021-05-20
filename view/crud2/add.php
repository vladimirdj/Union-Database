<div align="center">
<h1>Sensation Energy</h1>
<h2>Union Database</h2>
<div>
<?php
if(isset($_POST['add'])){
$add = file_get_contents('test.json');
$add = json_decode($add, true);
$add_arr = array(
'name' => $_POST['name'],
'u_id' => $_POST['u_id'],

);
$add[] = $add_arr;

$add = json_encode($add, JSON_PRETTY_PRINT);
file_put_contents('test.json', $add);

header('location: index.php');
}
?>
<form method="post" name="frmAdd">

<td>Name</td>
<td><input type="text" name="name"> </td>

<td>id</td>
<td><input type="text" name="u_id"> </td>

<input type="submit" value="Add" name="add">

</form>
