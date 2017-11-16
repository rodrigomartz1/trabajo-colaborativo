<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		

	<title>Hola usurio</title>

<style type="text/css">
	

	body
      {
        background-image: url(fondo1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        /*background-color: #464646;*/
      }

</style>

</head>
<body>

<?php

   session_start();

   if(!isset($_SESSION["id"]) && !isset($_SESSION["user"]))
   {
      header("Location:index.php");
   }

?>

<legend  style="font-size: 18pt"><b>Hola usuario </b></legend>



</body>
</html>