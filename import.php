<!DOCTYPE html>
<html lang="fr" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import du fichier excel | Parking management</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />

		<script>
			(function(e,t,n){
				var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")
			})(document,window,0);
		</script>
	</head>
	<body>
		<div class="container">
			<header class="codrops-header">
				<h1>Importation du fichier Excel</h1>
			</header>
			<div class="content">
				<div class="box">
					<form method='post' enctype='multipart/form-data' action='import.php'>
						<input type="file" name="excel" id="excel" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
						<label for="excel">
							<span></span>
							<strong>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
									<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
								</svg> Choisir fichier ...
							</strong>
						</label>
						<br><br><button type='submit' name="submit" class="btn-import">Enregistrer</button>
					</form>
				</div>
			</div>
		</div><!-- /container -->

		<script src="assets/js/custom-file-input.js"></script>
		<?php

			include "includes/db.php";
			require_once 'Classes/PHPExcel.php';

			if(isset($_POST['submit'])){
				$excel = $_FILES['excel']['tmp_name'];
				if(empty($excel)){
					echo "Veuillez entrer un fichier excel";
				}
				else {
					$excel = PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);
			    $excel -> setActiveSheetIndex(0);
			    echo "<table border=1>";
			    $i = 2;
			    while($excel->getActiveSheet()->getCell('A'.$i)->getValue() != ""){
			      $idPoule =      $excel->getActiveSheet()->getCell('A'.$i)->getValue();
			      $nom_poule = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			      $equipe1 =    $excel->getActiveSheet()->getCell('C'.$i)->getValue();
			      $equipe2 =    $excel->getActiveSheet()->getCell('D'.$i)->getValue();
			      $equipe3 =    $excel->getActiveSheet()->getCell('E'.$i)->getValue();
			      $equipe4 =    $excel->getActiveSheet()->getCell('F'.$i)->getValue();

			      $req = $bdd -> prepare("INSERT INTO poule(idPoule,nom_poule,equipe1,equipe2,equipe3,equipe4) VALUES (:kidPoule,:knom_poule,:kequipe1,:kequipe2,:kequipe3,:kequipe4)");
			      $req -> execute(array(
			        "kidPoule" => $idPoule,
			        "knom_poule" => $nom_poule,
			        "kequipe1" => $equipe1,
			        "kequipe2" => $equipe2,
			        "kequipe3" => $equipe3,
			        "kequipe4" => $equipe4
			        // "prenom_conducteur" => $prenom_conducteur,
			      ));
			      echo "<tr>";
			        echo "<td>".$idPoule."</td>";
			        echo "<td>".$nom_poule."</td>";
			        echo "<td>".$equipe1."</td>";
			        echo "<td>".$equipe2."</td>";
			        echo "<td>".$equipe3."</td>";
			        echo "<td>".$equipe4."</td>";
			        // echo "<td>".$date_miseEnService."</td>";
			        // echo "<td>".$date_visiteTech."</td>";
			      echo "</tr>";
			      $i++;
			    }

			    echo "</table>";
					echo "<strong>INSERTION REUSSIE</strong>";
				}
			}
			else {
				echo "";
			}
		?>
	</body>
</html>
