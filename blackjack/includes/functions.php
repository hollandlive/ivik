<?php
//I create a class for BlackJack game
class blackJack {
	
	//variable suits holds an array of 4 suites
	public $suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
	);
	        
	//variable faces holds an array of 13 faces
	public $faces = array (
	1=>"Ace",
    	2=>"Two", 
	3=>"Three", 
	4=>"Four", 
	5=>"Five", 
	6=>"Six", 
	7=>"Seven", 
	8=>"Eight",
	9=>"Nine", 
	10=>"Ten", 
	11=>"Jack", 
	12=>"Queen", 
	13=>"King", 
	);
	
	public $deck = array();

	//this variable holds a score of a random card
	public $cardValue;
	//this variable holds a random card from the deck array
	public $randomCard;

	
	/*With function crateDeck I set up a deck array to hold up all 52 cards 
	and print them with print_r*/ 
	public function createDeck ($deck){
	
	
	foreach ($colors as $color) {
		foreach ($cards as $card) {
			$deck[] = array ("card"=>$card, "color"=>$color);
			return $deck;
			
		}
	}
	
	
	}
	}

$obj = new blackJack();
print_r ($obj->suits);
echo '<br>';
print_r ($obj->faces);
echo '<br>';
print_r ($obj->faces);
echo '<br>';
var_dump ($obj->createDeck($obj->deck));


/*With function drawCard I choose for a random card
from the deck*/ 


//end of the class blackJack


/*
echo $card['card'] . ' of ' . $card['color'];
shuffle($deck);
$card = array_shift($deck);
echo $card['face'] . ' of ' . $card['suit'];

print_r ($deck);
function drawCard() {
	shuffle($deck);
	$card = array_shift($deck);
	return $card;
}

var_dump (drawCard());

 function drawCard ($deck) {
// Pick a random suit, and a random card from that suit
	$suit = array_rand($deck);
	$card = array_rand($deck[$suit]);
	
	// Determine the face value of the card.
	// Face cards are worth 10
	$card_value = ($card >= 10) ? 10 : $card;
			
	$return_value = array('display' => ($card < 10) ? $suit."0{$card}.jpg" : "$suit{$card}.jpg",
	                      'value' => $card_value);

	unset($deck[$suit][$card]);
	
	if(count($deck[$suit]) < 1) {
		unset($deck[$suit]);
	}
	
	return $return_value;
}


/**
I shuffle a deck (a pile) of cards and draw up a random card
shuffle($deck);
$card = array_shift($deck);
echo $card['face'] . ' of ' . $card['suit'];

function evaluateHand($hand) {
    global $faces;
    $value = 0;
    foreach ($hand as $card) {
        if ($value > 11 && $card['face'] == 'Ace') {
            $value = $value + 1;  // An ace can be 11 or 1
        } else {
            $value = intval($value) + intval($faces[$card['face']]);
        }
    }
    return $value;
}
*/
?>
