<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	

	<title>Login</title>
<style type="text/css">
	
body
      {
        background-image: url(fondo1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }


#con
{
	font-size: 50px;
	margin-left: 500px;
	flex-wrap: wrap;
	justify-content: space-around;
	text-shadow: 0 1px 0 #bbb,
	0 1px 0 #fff,
	0 2px 0 #bcc,
	0 3px 0 #baa,
	0 4px 0 #bee,
	0 2px 0 #000,
	0 5px 0 #000,
	0 1px 0 #add,
	0 5px 0 #ebb,
	0 6px 0 #ecc,
	0 4px 0 #000;
}


a
{
	background-color: #286548;
	padding: 7px;
	color: white;
	width: 60%;
	padding-left: 30px;
	padding-right: 30px;
	border-radius: 5px;
	margin-left: -850px;
	/*margin-top: -500px !important;*/
	font-size : 15px;
}



</style>


</head>
<body>
		
	</br>
	</br>
	


	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

			<br><br><br><br><br><br>
		 <legend  style="font-size: 18pt"><b>Inicia sesión </b></legend>

		<tr><td><label style="font-size: 14pt"><b>Matricula: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="matricula"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</t></tr></table>
		</form>
<br>

</div>
	
</body>
</html>