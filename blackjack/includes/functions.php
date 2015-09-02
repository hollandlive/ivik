<?php
//I create a class for BlackJack game
class blackJack {
	
	//variable suits holds an array of 4 suites
	public $suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
	);
	        
	//variable faces holds an array of 13 faces
	public $faces = array(2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K", "A");
	
	public $deck = array();

	//this variable holds a score of a random card
	public $cardValue;
	//this variable holds a random card from the deck array
	public $randomCard;

	
	//With this function I create a deck array to hold up all 52 cards 	
	public function __construct() { 
            
            //This function will build a simple 52 card deck for me
            foreach($this->suits as $suit) { 
                foreach($this->faces as $face) { 
                    
                    // Values for Cards 
                    $value = $face;
					
                    if(!is_numeric($face)) 	{
						$value = 10; 
						}
						
                    if($face == 'A') {
						$value = 11; 
						}
                    
					$this->deck[] = array("suit" => $suit, "face" => $face, "value" => $value); 
                } 
            }
			return 
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
?>
