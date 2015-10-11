
<?php

session_start();
include('functions.php');
if (isset($_POST['hit']))
{
    $deck = createDeck();
    $hand = drawCard($deck);
    $_SESSION["player"]   = $hand['player'];
    $_SESSION['dealer'] = $hand['dealer'];

    $hand_player =  $_SESSION["player"];
    $hand_dealer = $_SESSION['dealer'];
    print_r ($hand_player) . '<br>';



echo "<h3>Cards of the player</h3><br>";
foreach ($hand_player as $key =>$card) {
    
    $img = $card['card'] . $card['face'] . '.jpg';
    echo $img;
    echo "<img src =\"cards/$img\">";
}

echo "<h3>Cards of the dealer</h3><br>";
foreach ($hand_dealer as $key =>$card) {
    
    $img = $card['card'] . $card['face'] . '.jpg';
    echo $img;
    echo "<img src =\"cards/$img\">";
}



    echo '<br>';
    print_r ($hand_dealer) . '<br>';
    

} else if (isset($_POST['stay']))
{
    echo "Hello3";

} else if (isset($_POST['finish']))
{
    echo "Hello2";
} 

?>

<form method="post" action="">
<button input type="submit" name="hit" value="hit">HIT</button>
<button input type="submit" name="stay" value="stay">STAY</button>
<button input type="submit" name="finish" value="finish">Try Again</button>
</form>
