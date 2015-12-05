<?php
/*
Show the array of 52 cards and the image of the first card in the array
*/
class Deck
	
	{

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

	

	public function getDeck()
	{

			//$this->suits[] = shuffle($this->suits);
			return ($this->deck);
	}

	public function getImage()
	{
		
		foreach($this->deck as $card) {
			$this->deck[] = $card;
			$card = implode('',$card) . '.jpg';
			return $card;

		}
		
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
print_r($bc->getDeck());
$img = $bc->getImage();

echo "<img src =\"cards/$img\">";
//print_r($bc->getImage());
//print_r($bc->drawImage());

?>
