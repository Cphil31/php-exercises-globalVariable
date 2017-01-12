<?php 

echo "Bonjour ".$_POST['genre']." ".$_POST['Nom']." ".$_POST['Prenom']." votre user agent est ".$_SERVER['HTTP_USER_AGENT']." et votre adresse Ip est ".$_SERVER["REMOTE_ADDR"]." le nom du serveur est ".$_SERVER['DOCUMENT_ROOT'];




// echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

// $browser = get_browser(null, true);
// print_r($browser);

?>