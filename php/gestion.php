<?php

if(isset($_GET['apropos'])) 		    { 	include("php/apropos.php");}
elseif(isset($_GET['services'])) 		{ 	include("php/service.php");	}
elseif(isset($_GET['contact'])) 		{ 	include("php/contact.php");	}
elseif(isset($_GET['detail'])) 		    { 	include("php/detail.php");	}
else 									{ 	include("php/accueil.php");	}



?>