<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Bienvenue, <?php echo $_SESSION['nom']; ?></h1>
     <a href="deconnexion.php">Se deconnecter</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>