<?php
/* This is an example,
* and I am trying arrays 
and constants
in my simple program*/
$faces_of_the_cards = array(	
			'Spades',
			'Cubes',
			'Hearts',
			'Diamonds');
$cards_and_values = array(	
			'a'=>1,
			'2'=>2,
			'3'=>3,
			'4'=>4,
			'5'=>5,
			'6'=>6,
			'7'=>7,
			'8'=>8,
			'9'=>9,
			'10'=>10,
			'J'=>10,
			'Q'=>10,
			'K'=>10,
			);
//this examples demonstrates the difference between single '' 
echo $faces_of_the_cards[1] . '<br>';
foreach ($cards_and_values as $card=>$value) {
	echo $cards_and_values[$card] . ' of ' . $cards_and_values[$value] . '<br>';
}
//and double "" quotes
foreach ($cards_and_values as $card=>$value) {
	echo "$cards_and_values[$card] of $cards_and_values[$value] <br>";
}

echo'<br><br>';
echo 'now a deck function';
//This is an example of builfing an array of 52 cards
foreach ($faces_of_the_cards as $card_face)
	foreach ($cards_and_values as $key => $value) {
		/*this code will build a new deck array with three vars: 
		card_face, card, value*/
		$card_deck[] = array('card_face'=>$card_face, 'key'=>$key, 'value'=>$value);
	}
echo'<br><br>';
echo "Vualja, my card deck here <br><br><br>";
print_r($card_deck);
echo '<br><br>';
//This is a working example of magic constants
echo 'This is line ' . __LINE__ . ' of a program';
echo 'This is a dir ' . __DIR__ . ' of a program';
?>
