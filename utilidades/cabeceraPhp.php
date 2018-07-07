<?php
	define('user','Cesar');
	define('pass','Dominic123..');
	define('gestor','mysql');
	define('host','localhost');
	define('bd','gimnasio');

	$clases = scandir("clases");
	$pos = count($clases);

	for($i=2;$i<$pos;$i++){
		

		require_once 'clases/'.$clases[$i];
		
	}


?>