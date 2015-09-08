 <!DOCTYPE html>
<html lang="en">
<head>
    <!--Google Analytics arthem.info main page code-->
        <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-62166095-1', 'auto');
      ga('send', 'pageview');
        </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Freelance English Speaking Web and Graphic Designer specialized in Bootstrap and WordPress">
    <meta name="keywords" content="Freelance web designer, web development, landing page, wordpress website, PHP, Python, HTML, CSS, Wordpress, Bootstrap, Graphic Design">
    <meta name="author" content="Art Aksenovs">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 month" />
    <!-- title freelance, web, design -->
    <title>BlackJack</title>
 
 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- My Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    


    <!-- Arthem Info CSS -->
    <link href="assets/css/vitality-blue.css" rel="stylesheet" type="text/css">

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<?php include ('includes/functions.php'); ?>
<body>
<?php
session_start();
	if(isset($_POST['deal'])) 
	{
		// create a deck included 51 cards
		$deck = buildDeck();

		// draw the first 2 cards 
		$cards 	= drawRandomCard($deck);

		// store the remaining cards
		$_SESSION['rest_cards'] = $cards['rest_cards'];
		// store cards in session for the next round
		$_SESSION['cards'] 	= $cards;
		// store dealer's cards for the next round
		$_SESSION["dealer"] = $cards['dealer'];
		// store players's cards for the next round
		$_SESSION["player"] = $cards['player'];	

		// assign the values for the output
		$player = $_SESSION["player"];
		
		// assign the value to get the result
		$player_value = $cards['player']; 
		$dealer_value = $cards['dealer']; 

		// call the function getRoundResult
		$result = calculateValue($player_value, $dealer_value);

	} elseif(isset($_POST['hit']))
	{
				// use the remaining cards from the previous round
		$rest_cards = $_SESSION['rest_cards'];
		//assign the previous hand to a variable
		$player = $_SESSION['player'];
		$dealer = $_SESSION['dealer'];
		// call removeCard function and get the next card
		$card = removeCard($rest_cards);
		// extend the array with the card to show
		array_push($player, $card[0]);
		// store in the session for the next round
		$_SESSION['player'] = $player;

		// get the result
		$result = calculateValue($player);
		
		// store the remaining cards for the next round
		$_SESSION['rest_cards'] = $card['rest_cards'];
	} elseif(isset($_POST['stand'])) 
	{
		
	}
?>
<div class = "container">
<div class = "row">
<div class = "col-md-6">
<h2 class = "text-left">Play Now?</h2>

</div>
<div class = "col-md-3">
<h4 class = "text-left">Dealer</h4>
</div>
<div class = "col-md-3">
<h4 class = "text-left">Player</h4>
</div>
</div>
</div>
<div class = "container">
<form method = "POST" action="">
<?php if(isset($_POST['deal'])) {?> 

<h3>Dealer has these : </h3>
<?php 
$img2 = $_SESSION['dealer'][0]['face'] . $_SESSION['dealer'][0]['suit']. '.jpg';//what means  'dealer'][0]['color']
echo "<img src =\"cards/$img2\">";?> 

<h3>Player has these : </h3>
<?php 
						foreach ($player as $index => $card) {
							$img = $card['face'] . $card['suit'] . '.jpg';
							//echo $img . '<br>';
							echo "<img src =\"cards/$img\">";
	    					//echo $card['face'] . ' of ' . $card['suit'] . "<br />";
						} 
					?> 
					<hr class="colored">
					<h4 class = "text-left">Player has the: <?php 
					if ($result['player'] > 21) 
					{ 
						echo $result ['player'] . "Lost </h4>";
					} else {
						echo $result['player'] . "</h4>";
					}
					?>
					<hr class="colored">
					<?php }
					else {
				echo "<p>Play</p>";
			} 
					?>

<?php 
			if(isset($_POST['deal']) || isset($_POST['hit']) && $result['player'] < 21) {

				echo '<a href="index.php" class="btn btn-primary text-right">Try Again</a>&nbsp;';
				echo '<input type="submit" name="hit" value="Hit" class="btn btn-success text-right"/>&nbsp;';
				echo '<input type="submit" name="stand" value="Stand" class="btn btn-danger text-right"/>';
			}
			elseif (isset($_POST['deal']) || isset($_POST['hit']) && $result['player'] > 21) {


				echo '<a href="index.php" class="btn btn-primary">Try Again</a>&nbsp;';
			}
			else {

				echo '<input type="submit" name="deal" value="Deal" class="btn btn-primary"/>';
			}
	?>	
</div>
</div>	
</form>
</body>
</html>
