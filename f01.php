<?php
/* This is an example, which demonstrates the difference
* between --$a, $a--
* ++$a and $a++
* example at http://blogsfeeds.com/php/f02.php
*/
$a = 0;
//if (--$a == 0) echo '-1 is not == 0' . $a; //will echo nothing and programm stops
if ($a-- == 0) echo 'True, 0 == 0 and after checking $a is decremented and  becomes ' . $a; //will echo 'True, 0==0 and after checking $a is decremented and  becomes --1'

echo 'Hello';
?>