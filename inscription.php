<?php
require_once 'db.php';
include'inc/header.php';

	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) OR !empty($_POST['email']))
	{
		echo "Une adresse valide stp...";

		if (!empty($_POST['password']) && !empty($_POST['confirm_password']) && $_POST['password'] = $_POST['confirm_password'])
			{
				$req = $pdo->prepare('INSERT INTO users WHERE email = $_POST['email'] AND password = $_POST['password'] VALUES (?,?);');
				$req->execute([$_POST['email'],$_POST['password']]);
				header('Location:connexion.php');
				$_SESSION['auth'] = $_POST['email'];
				exit();
			}
	}
?> 

<form action="" method="POST">
  	<div class="form-group">
    	<label>Email</label>
    	<input type="email" class="form-control" placeholder="Email" name="email">
  	</div>
  	<div class="form-group">
    	<label>Mot de passe</label>
    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	</div>
	<div class="form-group">
    	<label>Confirmez votre mot de passe</label>
    	<input type="password" class="form-control" placeholder="Confirm your password" name="confirm_password">
	</div>
	<div>
   		<button type="submit" class="btn btn-default">Envoyer</button>
   	</div>	
</form>

<?php

include 'inc/footer.php';
?>
