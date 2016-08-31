<?php
    session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>php_challenge1 envoie d'email</title>
	<meta charset="utf-8">
	  	 <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
	 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body style="background-color: #E6E6E6; margin-top:40px">
    <div class="container">
        <div class="starter-template">

            <!--si il y des errors-->
            <?php if (array_key_exists('errors',$_SESSION)): ?>
            <div class="alert alert-danger">
                <?=implode('<br>', $_SESSION['errors']); ?>
            </div>
            <?php endif;  ?>

            <!--   Si le email a été envoyé   -->

            <?php if (array_key_exists('success',$_SESSION)): ?>
            <div class="alert alert-success">
                votre email a été bien envoyé
            </div>
            <?php endif; ?>

            <form action="post_contact.php" method="POST">
                 <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="inputname"> votre nom</label>
                            <input type="text" name="name" class="form-control" id="inputname" value=<?=isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name']:''; ?>>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="form-group">
                            <label for="inputemail"> votre email</label>
                            <input type="email" name="email" class="form-control" id="inputemail" value=<?=isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email']:''; ?>>
                        </div>
                    </div>
                    <div class=col-xs-6>
                        <div class="form-group">
                            <label for="inputmessage"> votre message</label>
                            <textarea name="message" id="inputmessage" maxlength="500" class="form-control" ><?= isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message']:''; ?></textarea><br/>            
                        </div>
                            <button class="btn btn-primary btn-md" type="submit"> Envoyer</button>
                    </div>
                </div>
            </form>
            <h3>Debug:</h3>
            <!--afficher les bugs-->
            <?= var_dump($_SESSION);?>
        </div>
    </div>
    <?php 
    //effacier les données
        unset($_SESSION['inputs']);
        unset($_SESSION['success']);
        unset($_SESSION['errors']);
        
    ?>
</body>
</html>
