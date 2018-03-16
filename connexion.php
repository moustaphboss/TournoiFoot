<?php
	session_start();
?>
<!DOCTYPE html>

<html>

<head>
	<title></title>
</head>

<body>
	<?php 
		if (!empty($_REQUEST['email'])) {
			$_SESSION["email"]=$_REQUEST["email"];
			$_SESSION["pass"]=$_REQUEST["pass"];

			try {
	            $bdd = new PDO('mysql:host=localhost;dbname=tournoi_foot;charset=utf8', 'root', '');
	        }
	        catch (Exception $e){
	               die('Erreur : '. $e->getMessage());
	        }

	        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        $admin= $bdd->query('SELECT * from administrateur');

	        $email= $_REQUEST['email'];
	        $pass= $_REQUEST["pass"];

	        $passwd=sha1($pass);

	        while($donnees = $chefdept->fetch()){
	        	if(($donnees['email']==$email) && ($donnees['passwd']==$passwd)){
					header('location:');
				}
			}

			echo "Email ou mot de passe incorrect(s). "."<a href='connexion.html'>Réessayez</a>";


			$admin ->closeCursor();
		}


		else header('location:connexion.html');
	?>
</body>

</html>   