<?php

$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);

//function createDeck - it will create a deck of 52 cards. Todo - wrap it into a function
$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

//function drawCard - shuffling a deck and drawing a card. Todo - wrap it into a function
shuffle($deck);

$card = array_shift($deck);

echo $card['face'] . ' of ' . $card['suit'];
echo '<br>';
print_r($deck);


?>
