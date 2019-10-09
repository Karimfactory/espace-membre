<?php
include 'inc/header.php';

if(!empty($_POST['email']) AND !empty($_POST['password'])){
	require_once 'db.php';
	$req = $pdo->prepare('SELECT INTO users VALUES email, password WHERE :email = $_POST['email'] AND :password =($_POST['password']);');
	$req->execute(['username' => $_POST['email']]);
	$user = $req->fetch();
		if($user == null){
			else if (password_verify($_POST['password'], $user=>'password')){
				$_SESSION['auth'] = $user;
				$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
				header('Location:site.php');
				exit();
			}
		}
	}
?> 


<h3>Connexion</h3>


<form action="" method="POST">
  	<div class="form-group">
    	<label>Email :</label>
    	<input type="email" class="form-control" placeholder="Email" name="email">
  	</div>
  	<div class="form-group">
    	<label>Mot de passe :</label>
    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	</div>
	<div>
   		<button type="submit" class="btn btn-default">Connexion</button>
   	</div>	
</form>

<?php
include 'inc/footer.php';
?>