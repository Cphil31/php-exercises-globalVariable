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


			</body>
			</html>
