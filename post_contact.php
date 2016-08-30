
<?php 

	$errors=[];
	
	if (!array_key_exists('name', $_POST) || $_POST['name'] == '') {
		$errors['name']="Vous n'avez pas mis votre nom!";
	}

	if (!array_key_exists('email', $_POST) || $_POST['email'] =='' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email']="Vous n'avez pas mis votre email!";
	}
	if (!array_key_exists('message', $_POST) || $_POST['message'] =='') {
		$errors['message']="Vous n'avez pas mis un message!";
	}
	if (!empty($errors)) {

		session_start();

		$_SESSION['errors']=$errors;
		$_SESSION['inputs']=$_POST;
		header('Location:mail.php');
	}
	else
	{
		$_SESSION['success']=1;
		$message=$_POST['message'];
		$headers='FROM:abdulrahman.rasho@gmail.com';
		mail('abdulrahman.rasho@gmail.com', 'formaulaire contact', $message,$headers);
		header('Location:mail.php');

	}
	/*

<?php
     $to      = 'ab_rasho@yahoo.fr';
     $name = $_POST['name'];
     $message = $_POST[message];
     $headers = 'From: 'ab_rasho@yahoo.fr' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>


	$nom=$HTTP_POST_VARS['name']; 
$mail=$HTTP_POST_VARS['email'];  
$message=$HTTP_POST_VARS['message']; 

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="ab_rasho@yahoo.fr"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 

/*
*/
	
?>