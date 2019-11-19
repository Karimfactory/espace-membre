<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="pourleplaisirdevosyeux">

    <title>Hey there, welcome to my new fresh and clean website...</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>

  <body class="text-center">
  <header class="masthead mb-auto">
      <nav class="nav nav-masthead justify-content-center">      
        <?php if(!isset($_SESSION['auth'])) :?>
        <a class="nav-link" href="incription.php">Inscription</a>
        <a class="nav-link" href="connexion.php">Connexion</a>
        <?php elseif(isset($_SESSION['auth'])): ?>
        <a class="nav-link active" href="logout.php">Se déconnecter</a>
        <?php endif; ?>
        <a class="nav-link" href="contact.php">Contact</a>
      </nav>
  </header>
