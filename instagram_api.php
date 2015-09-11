<?php 
if (!empty($_GET['location'])){
	$maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($_GET['location']); 
	$maps_json = file_get_contents($maps_url);
	$maps_array = json_decode($maps_json, true);
	$lat = $maps_array['results'][0]['geometry']['location']['lat'];
	$lng = $maps_array['results'][0]['geometry']['location']['lng'];//http://maps.googleapis.com/maps/api/geocode/json?address=ankeveen&sensor=false
	}
	$instagram_url = 'https://api.instagram.com/v1/mediasearch?lat=' . $lat . '&lng=' . $lng . 'client_id=adf526c7d6c549b8a144b2b41d1c24e4';
	$instagram_json = file_get_contents($instagram_url);
	$instagram_array = json_decode($instagram_json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>geogram</title>
</head>
<body>
<form action ="">
<input type = "text" name = "location" />
<button type ="submit">Submit</button>
<br/>
<?php
if(!empty($instagram_array)) 
{
foreach($instagram_array['data'] as $image)
{
	echo '<img src="'
	.$image['images']['low_resolution']['url'].'" alt=""/>';
}
}
?>
</form>
</body>
</html>
