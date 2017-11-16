<?php
	$link =mysqli_connect("localhost","root","") or die("No se encuentra la base de datos");
	if($link)
	{
		mysqli_select_db($link,"usuarios");
	}
?>

