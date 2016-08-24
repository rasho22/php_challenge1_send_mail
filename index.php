<!DOCTYPE html>
<html>
<head>
	<title>php_challenge1</title>
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
	    <form action="action.php" method="post">
	        <input type="email" class="form-control" placeholder=" votre mail" id=" email"><br/>
	        <p>Votre message:</p>
	          <textarea class="form-control" id="txt" placeholder="votre message"> </textarea>
	        <input type="submit" value="envoyez" />
	    </form>
	</div>
</body>
</html>
