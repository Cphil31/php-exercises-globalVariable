		<?php 
		setcookie("user",$_POST['user'],time() + 365*24*3600, null, null, false, true);
		setcookie("login",$_POST['login'],time() + 365*24*3600, null, null, false, true);
		setcookie("user",$_POST['user'],time() + 365*24*3600, null, null, false, true);
		setcookie("login",$_POST['login'],time() + 365*24*3600, null, null, false, true);

		 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="menu" >
		<a href="contenu.php">Contenu</a>
		
	</div>
	<div class="phrase">

		<?php 
		include ('style.php');
		echo "Bonjour ".$_POST['genre']." ".$_POST['Nom']." ".$_POST['Prenom']." votre user agent est : ".$_SERVER['HTTP_USER_AGENT'];

		?>
	</div>
	<div class="phrase">
		<?php 
		echo "Votre adresse Ip est : ".$_SERVER["REMOTE_ADDR"];
		?>	
	</div>
	<div class="phrase">
		<?php 
		echo " Le nom du serveur est : ".$_SERVER['DOCUMENT_ROOT'];
		?>

	</div>
<?php 

 ?>
	<form action="index.php" method="POST">
		<div>
			<label for="">User : </label>
			<input type="text" name="user">
		</div>
		<div>
			<label for="">login : </label>
			<input type="text" name ="login">
		</div>
		<div>
			<input type="submit" name="submit" value="Valider">
		</div>

	</form>
	<?php 
	if (isset($_POST['user']) && isset($_POST['login'])){

		echo $_POST['user'].' '.$_POST['login'];

	}
	else {

	}

	?>
</body>
</html>
