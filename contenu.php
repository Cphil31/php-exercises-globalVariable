<?php 

// if (!isset($_POST['Nom'])){

// }
// else{
	session_start();

	$_SESSION['nom'] = 'CHRIST'; 
	$_SESSION['prenom'] = 'Jesus';
	$_SESSION['age'] = '33';


	echo 'bonjour votre nom est '.$_SESSION['prenom'].' '.$_SESSION['nom'].' '.'et votre age est '.$_SESSION['age'].' ans';
// }
?>