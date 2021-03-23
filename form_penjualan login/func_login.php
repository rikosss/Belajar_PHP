<?php 
function login($user,$pass){
	if ($user=="admin" && $pass=="123") {
		return true;
	} else{
		return false;
	}
}

?>



