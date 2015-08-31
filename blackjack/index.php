<?php
function calculateValues ($a, $b)
{
    $c = $a +$b;
    return calculateMoreValues ($c, $a);
    
}

function calculateMoreValues ($a, $b)
{
    return $a - $b;
}

echo calculateValues(10,20);

function myFunction ($param1, $param2 = false) {
    $param2 = $param2 == false ? 'empty' : $param2;
    return $param1 . '' . $param2;
}

echo myFunction('The second param is');
echo '<br />';
echo myFunction('The second param is', 'not empty');
/* returns null */

function myFunction1() {
}
var_dump (myFunction1());

?>