<div align="center">
<h1>Sensation Energy</h1>
<h2>Union Database</h2>
<div>
<table class="responsive-table">
<thead>
<tr>
<th scope="col">u_id</th>
<th scope="col">name</th>
</tr>
</thead>
<tbody>
<?php
$u_id = $_GET['u_id'];
$view = file_get_contents('test.json');
$get = json_decode($view);

if(!empty($get)){
foreach($get as $row1){
if ($row1->u_id == $u_id){
$row1 = $row1;
?>
<tr>
<td data-title="u_id"><?php echo $row1->u_id; ?></td>
<td data-title="name"><?php echo $row1->name; ?></td>
</tr>
<?php } } } ?>
</tbody>
</table>
<div class="btn-group">
<div align="center">
<input type="button" class="btn-2" onclick="location.href='index.php';" value="Back" />
</div>
</div>
