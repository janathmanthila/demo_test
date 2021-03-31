<?php
	$a=10;
	$b=20;
	Function test(){
		//we use global keyword to access variables which are created in golbal scope.otherise we can't access it
		global a,b;
		echo "a+b=".a+b;

	}

?>