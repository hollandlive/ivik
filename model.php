<?php
function open_database_connection()
{

$link = mysqli_connect('localhost', 'root', '', 'blog');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else 

  	{
	return $link;
	}
}
function close_db_connection($link) {
	mysqli_close($link);
}

function get_all_posts() {
$link = open_database_connection();
$sql = 'SELECT * FROM posts';
$result = mysqli_query($link, $sql);
$posts = array();
while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	$posts[] = $row;
	}
close_db_connection($link);
return $posts;
}

?>
