<?php

require_once("yaml/yaml.php");

$data=yaml_parse_file('donnée.yaml');

?>


<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="principal.css">
<script src="https://kit.fontawesome.com/7ca312f99b.js" crossorigin="anonymous"></script>
<head>
	<div id='entete'>
		<a href='Accueil.php'><img id='logo' src='logo.png' /></a>
		<div id='lien'>
			<li><a href='APropos.php'><i class="fa-solid fa-magnifying-glass"></i>A propos</a></li>
			<li><a href='Competences.php'><i class="fa-solid fa-check"></i>Compétences</a></li>
			<li><a href='Experience.php'><i class="fa-solid fa-flask"></i>Exprérience</a></li>
			<li><a href='Formation.php'><i class="fa-solid fa-list"></i>Formation</a></li>
			<li><a href='Contact.php'><i class="fa-solid fa-phone"></i>Contact</a></li>
		</div>	
	</div>
	
</head>
<body>
	<div id='competence'>
		<h1 id='titre'>Mes compétences :</h1>
		<div id='block2'>
			<div id='resultat'>
				<ul>
				<?php
					foreach($data["Compétence"] AS $uneCompétence){
						?>
						<U><li><?=ucfirst($uneCompétence["domaine"])?> :</U>
							<ul>
							<?php
								foreach($uneCompétence["item"] AS $unItem){
									?>
										<B><li><?=$unItem["nom"]?></li></B>
										<?php
											if ($unItem['score'] != ""){
												?><li><?=$unItem["score"]?></li><?php
											}
										?>
										
										
										<li><?php
											$lvl=$unItem["lvl"];

											$star="<i class='fa-solid fa-star'></i>";
											$star2="<i class='fa-regular fa-star'></i>";
											$nv=0;
											$tot=0;

											while ($lvl >0) {
												echo $star;
												$lvl=$lvl-1;
												$tot=$tot+1;
											}
											while ($tot <5) {
												echo $star2;
												$tot=$tot+1;
											}
										?></li><br>
										
									<?php 
								} 
							?>
							</ul><br>
						</li>
						<?php
					}
				?>
				</ul>
			</div>

		</div>
	</div>
</body>
<footer>
    <h1>Me contacter :</h1>
	<li><?php echo "<p>".$data["NumTel"]."</p>\n"; ?></li>
	<li><?php echo "<p>".$data["AdresseMail"]."</p>\n"; ?></li>
   	<a><iframe id="carte" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20875.933929994153!2d-0.28284207120595173!3d49.153273786357424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a692d0b34f9a7%3A0x40c14484fbcf780!2s14630%20Cagny!5e0!3m2!1sfr!2sfr!4v1698091119578!5m2!1sfr!2sfr" width="400" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a>
</footer>
</html>
