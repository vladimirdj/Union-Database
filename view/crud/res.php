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
$username = $_GET['username'];
$row1_name = $_GET['row1_name'];
$row2_name = $_GET['row2_name'];
$row3_name = $_GET['row3_name'];
$row4_name = $_GET['row4_name'];
?>
<div id="container3">
<table id="simpleTable1" class="responsive-table">
<thead>

<tr>

<th scope="col"><?php echo $row1_name; ?></th>
<th scope="col"><?php echo $row2_name; ?></th>
<th scope="col"><?php echo $row3_name; ?></a></th>
<th scope="col"><?php echo $row4_name; ?></th>

</tr>

</thead>


<tbody>

<?php
 $data = file_get_contents($username);
 $data = json_decode($data);
 $index = 1;
 if(!empty($data)){
 foreach($data as $row1){
        ?>

<tr>

<td data-title="row1"><?php echo $row1->$row1_name; ?></td>
<td data-title="row2"><?php echo $row1->$row2_name; ?></td>
<td data-title="row3"><?php echo $row1->$row3_name; ?></td>
<td data-title="row4"><?php echo $row1->$row4_name; ?></td>

</tr>
<?php
}
}
?>
</tbody>
</table>
