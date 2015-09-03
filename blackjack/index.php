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
shuffle($obj->deck);

$card = array_shift($obj->deck);

echo $card['face'] . ' of ' . $card['suit'];

?>