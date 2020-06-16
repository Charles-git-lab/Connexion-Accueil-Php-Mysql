<?php 
session_start(); 
include "bdd.php";

if (isset($_POST['uname']) && isset($_POST['mdp'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['mdp']);

	if (empty($uname)) {
		header("Location: index.php?error=Vous devez entrer votre pseudo");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Vous devez entrer votre mot de passe");
	    exit();
	}else{
		$sql = "SELECT * FROM utilisateurs WHERE pseudo='$uname' AND mdp='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['pseudo'] === $uname && $row['mdp'] === $pass) {
            	$_SESSION['pseudo'] = $row['pseudo'];
            	$_SESSION['nom'] = $row['nom'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: accueil.php");
		        exit();
            }else{
				header("Location: index.php?error=Pseudo ou Mot de passe incorrect");
		        exit();
			}
		}else{
			header("Location: index.php?error=Pseudo ou mot de passe incorrect");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}