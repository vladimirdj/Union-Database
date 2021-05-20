<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Unted Database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/union.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
</head>
<br><br><br>
<body>
<div align="center">
<h1>Welcome to Unted Database</h1>
</div>
<br> <br>
<div align="center">
<a href="../../u_d/index.php"><button class="btn-10">Back</button></a>
</div>
<br><br><br><br><br>
<br><br>
<div align="center">
<?php
$filename = file_exists('install');
if (file_exists('install/index.php')) {
?>
<a href="">
<script> window.location.href="install/index.php";  </script>
<?php
}else{
?>
<form action="login.php" method="post">


<div class="form-group">
<label for="thread_title">Username:</label>
<input type="text" id="thread_title" class="form-input" name="korisnik" placeholder="Username" required value="admin">
</div>

<div class="form-group">
<label for="thread_title">Password:</label>
<input type="password" id="thread_title" class="form-input" name="password" placeholder="Password" required value="admin">
</div>
<div class="form-group">

<label for="remember-me">Remember me</label>



<input type="checkbox"  name="remember" <?php if(isset($korisnik)) { ?> checked <?php } ?> />

</div>
<br>
<div class="btn-group">


<button class="btn-2" type="submit" name="prijava">Login</button>

</div>
</form>
<?php
}
?>
</div>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>

<div align="center">
<h3>Product of Sensation Energy</h3>
</div>
<div class="footer">
Copyright @ Sensation Energy
<?php echo date("Y");?>. All Rights Reserved.
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/union.js"></script>
</body>
</html>
