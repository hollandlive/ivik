<?php
/*im re-writing everything in OOP now */

class Deck
	
	{
	/*public $suits = array('diamonds', 'clubs', 's', 'h'); //there are 4 suits presented
	public $faces = array(
	"2"=>2, 
	"3"=>3, 
	"4"=>4, 
	"5"=>5, 
	"6"=>6, 
	"7"=>7, 
	"8"=>8,
    "9"=>9, 
	"10"=>10, 
	"j"=>10, 
	"q"=>10, 
	"k"=>10, 
	"a"=>11
	); //there are 13 faces presented in an array. I initialize Ace as a card with value 11
	*/
	public $deck = array();//an array of 52 cards
	public $suit;
	public $card = '';

	public function __construct()
	{

		$this->suites = array('d', 'c', 's', 'h');
		$this->faces = array(
	"2", 
	"3", 
	"4", 
	"5", 
	"6", 
	"7", 
	"8",
    "9", 
	"10", 
	"j", 
	"q", 
	"k", 
	"a");
		

		foreach ($this->suites as $suit) 
		{
			foreach ($this->faces as $face) {
				$this->deck[] = array($face, $suit);
				//$this->deck[] = array($face, $suit, $value);
			}
			
				
				
			
		}
		shuffle($this->deck);
		//return $this->deck;
	





								 	
	}

	

	public function getCard()
	{

			//$this->suits[] = shuffle($this->suits);
			return ($this->deck);
	}

	public function getImage()
	{
		
		foreach($this->deck as $card) {
			$this->deck[] = $card;
			$card = implode('',$card) . '.jpg';
			

		}
		return $card;
		//return ($this->deck);
	}

	/*public function drawImage() {
		$rest = substr ($this->getImage(), 0, -1);
		return $rest;
		//return ($this->getImage());
	}
*/
}


//$ab = new Card(3, 4);
//print_r($ab);
$bc = new Deck();
echo '<br>';
$img = $bc->getImage();
//print_r($bc->getCard());
echo "<img src =\"cards/$img\">"
//print_r($bc->getImage());
//print_r($bc->drawImage());

?>
