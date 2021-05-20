<div align="center">
<h1>Sensation Energy</h1>
<h2>Union Database</h2>
<div>
<a href="add.php">Add</a>
<table class="responsive-table">
<thead>
<tr>
<th scope="col">U_id</th>
<th scope="col">Name</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php
$se = file_get_contents('test.json');
$se = json_decode($se);
$i = 0;
if(!empty($se)){
foreach($se as $row1){
?>
<tr>
<td data-title="u_id"><?php echo $row1->u_id; ?></td>
<td data-title="name"><?php echo $row1->name; ?></td>
<td data-title="action">
<a href="view.php?u_id=<?php echo $row1->u_id; ?>">View</a> |
<a href="edit.php?e_id=<?php  echo $i; ?>">Edit</a> |
<a href="delete.php?d_id=<?php echo $i; ?>">delete</a>
</td>
</tr>
<?php
$i++;
}
}
?>
</tbody>
</table>
