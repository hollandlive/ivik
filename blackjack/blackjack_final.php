
<?php
/*I am re-writing this prog using functions
Not finished yet
*/

session_start();
include('functions.php');
if (isset($_POST['hit']))
{
    $deck = createDeck();
    $hand = drawCard($deck);
    $_SESSION["player"]   = $hand['player'];
    $hand_player =  $_SESSION["player"];
    print_r ($hand_player) . '<br>';

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
