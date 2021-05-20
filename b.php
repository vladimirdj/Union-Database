<?php
class Fruit{
public function getFruitPrice($fruit) {
$fruitArray = array("apples" => 1.99,
"bananas" => 0.69,
"cherries" => 2.99);
return $fruitArray[$fruit];
}
}
?>
