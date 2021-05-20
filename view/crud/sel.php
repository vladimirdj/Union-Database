<div align="center">
<h1>Sensation Energy</h1>
<h2>Union Database</h2>
<div>
<form method="GET" action="res.php">
<div class="form-group">
<label for="select"><h2>Select:</h2></label>
<select name="username" class="form-input">

<?php

if ($handle = opendir(".")) {

while (false !== ($entry = readdir($handle))) {

if ($entry != "." && $entry != ".." && strtolower(substr($entry, strrpos($entry, '.') + 1)) == 'json'){

echo '<option value="'.$entry.'">'.$entry.'</option>';
}

}

closedir($handle);
}
?>

</select>
</div>
<br><br>

<div class="form-group">
<lable>row1_name</lable>
<input type="text" id="title"  name="row1_name"  class="form-input" required  /></td>
</div>
<br>
<div class="form-group">
<lable>row2_name</lable>
<input type="text" id="title"  name="row2_name"  class="form-input" required  /></td>
</div>
<br>
<div class="form-group">
<lable>row3_name</lable>
<input type="text" id="title"  name="row3_name"  class="form-input" required  /></td>
</div>
<br>
<div class="form-group">
<lable>row4_name</lable>
<input type="text" id="title"  name="row4_name"  class="form-input" required  /></td>
</div>
<br>
<div class="btn-group">
<div align="center">
<button class="btn-10" type="submit" value="Search">GO !</button>
</div>
</div>
</form>
