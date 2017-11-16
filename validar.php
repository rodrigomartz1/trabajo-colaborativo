
<?php
//session_start();
	require("connect_db.php");

	$username=$_POST['matricula'];
	$pass=$_POST['pass'];



	$sql2=mysqli_query($link,"SELECT * FROM login WHERE matricula='$username'");
	if($f2=mysqli_fetch_array($sql2)){
		if($pass==$f2['pasadmin'])
		{
			session_start();
			$_SESSION['id']=$_POST['matricula'];
			$_SESSION['user']=$_POST['contraseña'];



			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
			//header("location:admin.html");
		
		}
	}


	$sql=mysqli_query($link,"SELECT * FROM login WHERE matricula='$username'");
	if($f=mysqli_fetch_array($sql)){
		if($pass==$f['password']){
			
			session_start();
			$_SESSION['id']=$_POST['matricula'];
			$_SESSION['user']=$_POST['contraseña'];

			header("Location: usuario.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>