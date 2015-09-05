<?php
//example 1
function controlHours () {
	$hours = 41;
$hour_rate = 15;
$bonus = 90;
$salary_gross = $hours * $hour_rate;	
	 if ($hours>40) {
		 echo 'Your salary with bonus is EUR' . ($salary_gross + $bonus);
	 
} else
{
	echo 'Your salary is ' . $salary_gross;
}
}
controlHours();
echo '<br><br>';
//example 2
$cijfer = 5.6;
$module = ($cijfer>=5.5 ? $module = 'voldoende' : 'onvoldoende');
echo $module;
echo '<br><br>';
//or anothger way to echo
echo $module = ($cijfer>=5.5) ? $module = 'voldoende' : 'onvoldoende';

echo '<br><br>';
/*xample 3
function onVoldoende() {
$module = true;
switch ('module') {
	
case voldoende:
	$result = ($module>=5.5 ? true : $module = 'voldoende');
	echo $result;
	break;
	
case onvoldoende:
	$result = ($module>=5.5 ? true : $module = 'onvoldoende');
	echo $module;
	break;
}
}
onVoldoende(6);
*/
//example3
$fruit = 'aardbei';
switch ($fruit) {
	
case 'aardbei':
	$aardbei = 'Een aardbei is rood';
	echo $aardbei;
	break;

case 'banan':
	$banan = 'Een banan is geel';
	echo $banan;
	break;

case 'appel':
	$banan = 'Een banan is geel';
	echo $banan;
	break;
	
default:
	echo 'Niks is gekozen';
}
echo '<br><br>';

//example 4
for ($i = 0; $i <= 4; $i++) {
	echo 'Dit is ronde' . ($i+1) . '<br>';
}
?>
