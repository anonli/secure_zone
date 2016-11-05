<?php

include ("../pages/fonctions/connexion.class.php");

$uneConnexion = new Connexion();

session_start();

if ( isset($_GET["page"]) ) {
	$page = $_GET["page"];
}
else {
	$page = "home";
}

ob_start();

switch($page){

	case "home":
		require "../pages/home.php";
	break;

	case "login":
		require "../pages/login.php";
	break;

	default:
		echo "<br><center><p>La page '".$page."' n'existe pas !</p></center>";
	break;
}

$content = ob_get_clean();

require "../pages/templates/default.php";

?>

// test