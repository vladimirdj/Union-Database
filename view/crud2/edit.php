<div align="center">
<h1>Sensation Energy</h1>
<h2>Union Database</h2>
<div>
<?php
$e_id = $_GET['e_id'];
$ed = file_get_contents('test.json');
$data_array = json_decode($ed , true);
$row = $data_array[$e_id];
if(isset($_POST['edit']))
{
$update_arr = array(
'name' => $_POST['name'],
'u_id' => $_POST['u_id'],
);
$data_array[$e_id] = $update_arr;
$ed = json_encode($data_array, JSON_PRETTY_PRINT);
file_put_contents('test.json', $ed);
header('location: index.php');
}
?>
<form method="post" name="frmUpdate">
Name: <input type="text" name="name" value="<?php echo $row['name'];?>">
U_id: <input type="number" name="u_id" value="<?php echo $row['u_id'];?>">
<input type="submit" value="Edit" name="edit"> </td>
</form>
