<?php
/*
My experiments with functions...
*/
function wtf($blabla=true) {
	$var1 = "one";
	$var2 = "two";
	
	if($blabla===true) {
		return $var2;
	}
	return $var1;
}
//this one will return two, because $blabla is not changed
echo wtf();
//this one will return one ($var1), because $blabla is changed
echo wtf ('not true');
?>