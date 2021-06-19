<?php 
require './config/connect.php';

mb_internal_encoding( "UTF-8" );
function mb_ucfirst($s)
{
	$s = mb_strtolower($s);
    return mb_strtoupper(mb_substr( $s, 0, 10 )).mb_substr( $s, 10 );
}

$name = htmlentities(mb_ucfirst(trim($_POST['name'])), ENT_QUOTES);


if(in_array('', $_POST)) {
	$msg_error = 'Merci de renseigner les champs manquants';
}
else {
	// if(!$email) {
	// 	$msg_error = 'Merci de renseigner un email valide';
	// }
	// elseif(strlen($password) < 8) {
	// 	$msg_error = 'Votre mot de passe doit faire au moins 8 caractères';
	// }
	 {
		$req = $db->prepare("
			INSERT INTO argonautes(name)
			VALUES (:name)
		");
		$req->bindValue(':name', PDO::PARAM_STR);
		$result = $req->execute();

		if($result) {
			$msg_success = 'Utilisateur crée';
		}
		else {
			$msg_error = 'Oups, une erreur `\'est produite';
		}
	}
}

// $msg = isset($msg_error);

// $last_url = $_SERVER['HTTP_REFERER']; // url d'où je viens
// if(strpos($last_url, '?') !== FALSE) {
// 	$req_get 	= strrchr($last_url, '?');
// 	$last_url 	= str_replace($req_get, '', $last_url);
// }
// if($msg) {
// 	header("Location: $last_url?msg2=$msg_error&error=true");
// }
// else {
// 	header("Location: $last_url?msg2=$msg_success&error=false");
// }
