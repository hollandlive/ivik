
<?php
/**********************
* Value FUNCTION**
***********************/
function createDeck() {
    $faces = array("s", "c", "h", "d");
    $cards = array(
                    '2' => 2, '3' => 3, '4' => 4, 
                    '5'=> 5, '6'=> 6, '7'=> 7, 
                    '8' => 8, '9'=> 9, '10'=> 10, 
                    'j' => 10, 'q' => 10, 'k' => 10, 'a' => 11
                    );
    foreach ($faces as $face) {
        foreach ($cards as $card=>$value) {
            $deck[] = array ('card'=>$card, 'face'=>$face, 'value'=>$value);
        }
        return $deck;
    }

}

function drawCard ($deck) {
    shuffle($deck);
    $hand = [];
    for ($i=0; $i<2; $i++) {
        $hand['dealer'][] = array_shift($deck);
        $hand['player'][] = array_shift($deck);
    }
    $hand['restCards'] = $deck; //return the array rest cards to the $deck
    //$hand has now ['restCards'] vars, ['dealer'], ['player']
    return $hand;
}

function addCard($hand) {

$addNewCard[] = array_shift($hand);
$addNewCard['restCards'] = $hand;

return $addNewCard;
}
function evaluateHand($hand) {
    $result ['player'] = 0;
    $result ['dealer'] = 0;
       foreach ($hand as $card) {
        if ($value > 11 && $card['face'] == 'Ace') {
            $value = $value + 1;
        } else {
            $value = intval($value) + intval($faces[$card['face']]);
        }
    }
    return $value;
}

?>
