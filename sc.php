<h1>PHP SOAP Client</h1>
<p>Select a fruit to obtain the price from the SOAP Server</p>

<form action="sc.php" method="post">
Request:
<select name="request">
<option>Apples</option>
<option>Bananas</option>
<option>Cherries</option>
</select>
<input type="submit" name="submit">
</form>

<br /><br />

<?php

if (isset($_POST['submit'])) {
$options = array("location" =>"sopa.php",
"uri" => "sopa.php");
try {
$client = new SoapClient(null, $options);

$chosen_fruit = strtolower($_POST['request']);
echo $chosen_fruit . " costs £";

$fruit_price = $client->getFruitPrice($chosen_fruit);

echo $fruit_price . "<br />";
} catch(SoapFault $ex) {
var_dump($ex);
}
}
?>
