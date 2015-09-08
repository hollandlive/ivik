<?php
function buildDeck() 

{
		$suits = array('h', 'd', 'c', 's');
		$faces = array
		(
			'A' => 1,
			'2' => 2,
			'3' => 3,
			'4' => 4,
			'5' => 5,
			'6' => 6,
			'7' => 7,
			'8' => 8,
			'9' => 9,
			'10' => 10,
			'j' => 10,
			'q' => 10,
			'k' => 10,
		);
		
		foreach ($suits as $suit) 
		{
				foreach ($faces as $face => $value) 
				{
					$deck[] = array ('suit' => $suit, 'face' => $face, '$value' => $value);
				}
		}
		
		return $deck;
}

function drawRandomCard($deck) 
{
	shuffle($deck);
	$cards = [];
	
	for ($i=0; $i<2; $i++) 	
	{
		$cards['player'][] = array_shift($deck); //???? - first array_shift deck twice
		$cards['dealer'][]= array_shift($deck);
	}
	
	$cards['rest_cards'] = $deck;
	
	return $cards;
}

function removeCard($cards) 
{
	$card[] = array_shift($cards); //???? and then array_shift from cards (which is the rest cards of the deck???)
	$card['rest_cards'] = $cards;

	return $card;
	
}

function calculateValue($player_value = false, $dealer_value = false) 
{
	foreach ($player_value as $card) 
	{
		$result ['player'] = 0;
		$result ['dealer'] = 0;
		
		$result ['player'] += $card['value'];
	}
	
	return $result;
}
?>
