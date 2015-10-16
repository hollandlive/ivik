 <!DOCTYPE html>
 <!--In the beginning I have some common HTML and Bootstrao elements-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>BlackJack</title>
 
	<!-- I download latest compiled and minified CSS from maxcdn-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- I use some extra Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    


    <!-- I use a little bit modified Arthem Info CSS -->
    <link href="assets/css/vitality-blue.css" rel="stylesheet" type="text/css">

    <!-- This blocks are designed for IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class = "container">
<div class="col-md-8">
<?php
session_start();//I invoke the $_SESSION global var by starting session with session_start() function
//I build an array of 4 suits
$suits = array ('s', 'h', 'c', 'd');
//I build an array of 13 faces
$faces = array (
    "2"=>2, "3"=>3, "4"=>4, "5"=>5, "6"=>6, "7"=>7, "8"=>8,
    "9"=>9, "10"=>10, "j"=>10, "q"=>10, "k"=>10, "a"=>11
);
include ('includes/functions.php');//I call to the functions.php from includes file


/* Now build the deck by combining the faces and suits. */

$deck = array();

foreach ($suits as $suit) {
    $keys = array_keys($faces);
    foreach ($keys as $face) {
        $deck[] = array('face'=>$face, 'suit'=>$suit);
    }
}

/* Next, I randomize the order the deck with shuffle and draw 2 random cards for dealer and player */

shuffle($deck);

$hand = array();

if (empty($_POST)) //if there is no any button pressed
{
    for ($i = 0; $i < 2; $i++) 
	{
        $hand[] = array_shift($deck);//creating array hand for the cards of the player
        $dealer[] = array_shift($deck);//creating array dealer for the cards of the dealer
    }
	echo '<pre>';
	var_dump ($hand[]);
	var_dump($dealer[]);
	echo '</pre>';
		
} elseif ($_POST['submit'] == 'stay') //if stay button pressed 
		{
			$dealer = unserialize($_POST['dealerstr']);//with unserialize() re-creating arrays 
			$hand = unserialize($_POST['handstr']);//from the string 
			$deck = unserialize($_POST['deckstr']);//back to PHP arrays
			
			while(evaluateHand($dealer) < 17) //following the rule that if player stays, and dealer has < than 17
			{
				$dealer[] = array_shift($deck);//that dealer has to take the card unless his score > than 17
			}
		echo "<h4>Dealer has " . evaluateHand($dealer) . "  ***|||*** " . "<h4>Player (you) has " . evaluateHand($hand) . "</h4><br />\n";//showing result of the dealer and the player

		
include ('round.php');

		
		
		$handstr = $_POST['handstr'];
		$dealerstr = serialize($dealer);
		$deckstr= serialize($deck);
	}


else

if ($_POST['submit'] == 'hit me')
{
    $dealer = unserialize($_POST['dealerstr']);
    $hand = unserialize($_POST['handstr']);
    $deck = unserialize($_POST['deckstr']);
    $hand[] = array_shift($deck);
    $dealerstr = $_POST['dealerstr'];
    $handstr = serialize($hand);
    $deckstr= serialize($deck);}
	

printf(
   "<form method='post'><fieldset>
   <input type='hidden' name='handstr' value='%s' />
   <input type='hidden' name='deckstr' value='%s' />
   <input type='hidden' name='dealerstr' value='%s' />",
   htmlspecialchars($handstr, ENT_QUOTES),
   htmlspecialchars($deckstr, ENT_QUOTES),
   htmlspecialchars($dealerstr, ENT_QUOTES)
); 


echo "<h3>Cards of the player</h3><br>";
foreach ($hand as $index =>$card) {
	
	$img2 = $card['face'] . $card['suit'] . '.jpg';
    echo "<img src =\"cards/$img2\">";
}
?>

<h3>Cards of the dealer<br>	

<?php 
$img = $dealer[0]['face'] . $dealer[0]['suit'] . '.jpg';
echo "<img src =\"cards/$img\">"; ?></h3><br><br>
<h3>Player has : <?php echo evaluateHand($hand); ?></h3>
<input type='submit' name='submit' value='hit me' />
<input type='submit' name='submit' value='stay' />
</fieldset></form>
<a href='index.php'>Try Again</a>
</div>
<div class="col-md-4">
<h3>The Process</h3>
<p>These are the steps</p>
<p>1. Creating an array deck of 52 cards (4 suits, 13 faces)</p>
<p>2. Randomizing the deck with shuffle() and get first two cards for the player and the Dealer with array_shift (from inside the for loop)</p>
<p>3. When the player wins and when he losts? a) if the score of the Player < 22 AND Score of the Player > Score of the Dealer - Player Won. b) if the score of the Player < 22 AND Score of the Player = Score of the Dealer - Tie. c)Otherwise Player lost </p>

</div>
</div>
</div>
</body>
</html>
<!--<p>Player has : <?php echo evaluateHand($hand); ?></p>
<p>Dealer is showing the <?php echo $dealer[0]['face'] ?> of <?php echo $dealer[0]['suit'] ?></p>
<input type='submit' name='submit' value='hit me' />
<input type='submit' name='submit' value='stay' />
</fieldset></form>
<a href='index.php'>Try Again</a>
</div>
</body>
</html>-->


