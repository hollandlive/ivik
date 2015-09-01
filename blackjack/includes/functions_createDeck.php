<?php
function createDeck (){
$colors = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$cards = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);

//function createDeck - it will create a deck of 52 cards. 
$deck = array();

foreach ($colors as $color) {
    foreach ($cards as $card) {
        $deck[] = array ("card"=>$card, "color"=>$color);
    }
}
return ($deck);
}
print_r (createDeck());

?>
