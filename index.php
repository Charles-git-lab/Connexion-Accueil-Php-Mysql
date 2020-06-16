<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="connexion.php" method="post">
     	<h2>Connexion</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Pseudo</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur (ex: Jean)"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="mdp" placeholder="Mot de passe (ex: 123)"><br>

     	<button type="submit">Se connecter</button>
     </form>
</body>
</html>