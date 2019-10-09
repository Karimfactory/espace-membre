<?php
include 'inc/header.php';
?>

<form action="" method="POST">
	<ul>
		<li>Nom et/ou Prenom</li>
			<input type="text" name="nom" class="form-control" required>
		<li>Email</li>
			<input type="email" name="mail" class="form-control" required>
		<li>Objet</li>
			<input type="text" name="objet" class="form-control" required>
	</ul>
</form>

<?php

	if(!empty($POST['nom']) AND !empty($POST['objet']) AND !empty($POST['mail'])){
		mail('web@master.fr', $POST['nom'], $POST['objet'], 'from : $POST['mail']');
	}

	include 'inc/footer.php';
?>