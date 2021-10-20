<?php

if(isset($_GET['apropos'])) 		{ 	include("php/apropos.php");}
elseif(isset($_GET['services'])) 		{ 	include("php/services.php");		}
elseif(isset($_GET['contact'])) 		{ 	include("php/contact.php");	}
else 									{ 	include("php/accueil.php");		}



?>