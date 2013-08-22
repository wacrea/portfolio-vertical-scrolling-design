<?php

require_once('lib/lang.php');

$email_adrien = 'hello@williamagay.com';

if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['msg']) && !empty($_POST['msg']))
{
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	$msg2 = "Nom : $nom \n
		 E-mail : $email \n
		 Message : \n 
		 $msg \n
		 \n Envoyé depuis le Portfolio";
	$entete ="From: $nom \n Reply-To: $email" ;

	mail($email_adrien, 'Contact depuis le portfolio', $msg2, $entete);

	echo lang('Email envoyé !', 'Email send !');
}
else
{
	echo lang('Remplissez tout les champs !', 'You have not completed all');
}

?>