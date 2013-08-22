<?php

	//
	//	lang.php
	//
	//		le 1er paramètre est la version FRANCAISE du texte.
	//		Le 2nd paramètre est la version ANGLAISE du texte.
	//		
	//		On affiche selon la langue du navigateur la version ANGLAISE ou FRANCAISE
	//
	// William AGAY 2011
	
	function lang($fr_str, $en_str)
	{

		// On détecte
		$langue_user = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$langue_user = $langue_user{0}.$langue_user{1};
		
		if($langue_user == 'fr')
		{
			return $fr_str;
		}
		elseif($langue_user == 'en')
		{
			return $en_str;
		}
		else
		{
			// On affiche en Anglais par défaut
			
			return $en_str;
			
		}
	}
?>