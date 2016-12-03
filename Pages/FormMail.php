<?php
/* Remplacer votre_adresse@mail.net par votre adresse mail
   Remplacer www.votre_domaine.net par votre nom de domaine */

$adresse = "jacobcindy@live.be";
$site = "www.if3projets.net/wad15/cindy/Pages";
$nom = $_POST['nom'];
/*$statut = $_POST['statut'];*/
$societe = $_POST['societe'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$message = $_POST['comments'];

$TO = $adresse;
$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";
$sujet = "Formulaire de contact";
$informations = "
Nom: ".$_POST['nom']." \r\n
Societe: ".$_POST['societe']."\r\n
Email du formulaire: ".$_POST['mail']." \r\n
Sujet du formulaire: ".$_POST['tel']."\r\n
Message: ".$_POST['comments']." \r\n
";




$res = mail($TO, $sujet ,$informations, $head);

// if(filter_var($mail, FILTER_VALIDATE_EMAIL)
// {

// 	    if (true == $res)
// 	{
// Header("Location: http://".$site."/formail2_ok.html" );
// 	}
// }

if(!empty($nom) && !empty($societe) && !empty($mail) && !empty($tel) && !empty($message) )
{
    if (true == $res)
	{
Header("Location: http://".$site."/FormMail_OK.html" );
	}

	else{
		Header("Location: http://".$site."/FormMail_PasOK.html" );
	}
}


if (empty($nom) || empty($societe) || empty($mail) || empty($tel) || empty($message) ) 
{

	Header("Location: http://".$site."/FormMail_PasOK.html" );
}

/* if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
{
Header("Location: http://".$site."/formail2_pasok.html" );
	
} */



?>
