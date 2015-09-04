<?php
/*This is a working draft 
of my BlackJack game in PHP
which I try to make while I receive Zend-training
Art Aksenovs
03.09.2015
*/
include ('includes/functions.php');
$obj = new Deck;
var_dump ($obj->suits);
echo '<br>';
print_r ($obj->faces);
echo '<br>';
echo '<br>';
print_r ($obj->deck);
echo '<br>';
echo '<br>';
echo 'Test test';
print_r ($obj->card);
echo '<br><br>';
shuffle($obj->deck);

$card = array_shift($obj->deck);

echo $card['face'] . $card['suit'];
$img_name = $card['face'] . $card['suit'];
echo "<img src='cards/2c.jpg'>";
echo '<br><br>';
echo "<img src='cards/' . \"$img_name\" . '.jpg'>";
echo '<br><br>';
echo 'And now with the picture! Random Card';
/*echo "<img src='cards/'. $card[\'suit\'] . $card["suit"]'
echo "<img src='cards/" . $card['suit'] . $card["suit"]'.jpg'>"; 

*/
?>
