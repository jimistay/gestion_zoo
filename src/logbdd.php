<?php

	$conn = mysqli_connect("localhost", "root", "", "ppe4");
	function protect($w){
		$w = str_replace("=", "", $w);
    	$w = str_replace("'", "", $w);
		$w = str_replace('"','',$w);
		$w = str_replace('(','',$w);
		$w = str_replace(')','',$w);
		$w = str_replace('*','',$w);	
		return ($w);
	}
	$log = '../../html/ppe4/log.html';
	$logF = '../../html/ppe4/logfail.html';
	$accP = '../../indexpatron.php';
	$accE = '../../indexemployes.html';
?>