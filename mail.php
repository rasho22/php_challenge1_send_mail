<!DOCTYPE html>
<html>
<head>
	<title>php_challenge1 envoie d'email</title>
	<meta charset="utf-8">
	  	 <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
	 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class=''>
	</div>
	<?php 
	echo "<h1>ceci est un teste php </h1>";
	?>
	 <div class="col-md-4">
		<p>Veuillez vous identifier:</p>
	    <form action="" method="post">
	        <input type="email" name="email" placeholder=" votre email" id=" email"><br/>
	        <input type="text" name="objet" placeholder="objet" ><br/>

	        <p>Votre message:</p>
	          <textarea name="message" cols="50" rows="6" id="txt" placeholder=" votre message"> </textarea><br/>
	        <input type="submit" value="Envoyer">
	    </form>
	</div>
	<?php 
		if (isset($_POST) && !empty($_POST["email"]) && !empty($_POST["objet"]) && !empty($_POST["message"])) {

			extract($_POST);
			$destinataire="rasho80@hotmail.com";
			$expediteur="$email";
			$mail=mail($destinataire,$objet,$message,$expediteur);
				if ($mail) echo "<h3>mail envoyé avec succé</h3>"; else echo "<h3>echec d'envoie</h3>";
		} else echo "<h3>formaulaire non sumis ou des champs sont vides</h3>";
	?>
</body>
</html>
