<?php
$data=yaml_parse_file('../Yaml/donnée.yaml');
?>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="../Css/principal.css">
<script src="https://kit.fontawesome.com/7ca312f99b.js" crossorigin="anonymous"></script>
<body>
	<div id="APropos">
		<h1 class='titre'>A Propos de moi :</h1>
		<div id='presentation'>
			<img id='pdp' src='<?php echo $data["pdp"] ?>'> 
			<p id='accroche'><?php echo $data["AccrocheAPropos"] ?></p>	
			<p id='texte'><?php echo $data["APropos"] ?></p>
		</div> 
	</div>
</body>
</html>