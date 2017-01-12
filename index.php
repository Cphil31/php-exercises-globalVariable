<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
	<a href="contenu.php">contenu</a>
		
	</div>
<div>
	
	<?php 

echo "Bonjour ".$_POST['genre']." ".$_POST['Nom']." ".$_POST['Prenom']." votre user agent est : ".$_SERVER['HTTP_USER_AGENT'];

?>
</div>
<div>
<?php 
echo "Votre adresse Ip est : ".$_SERVER["REMOTE_ADDR"];
 ?>	
</div>
<div>
<?php 
	echo " Le nom du serveur est : ".$_SERVER['DOCUMENT_ROOT'];
 ?>

</div>


			</body>
			</html>
