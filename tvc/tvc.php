<?php
$title = 'TVC';
require '../php/head.php';
require'../php/header.php'; 
?>
	<section>
		<h1 class="titre"><?= $title ?></h2>
		<article>
			<h2>QU'EST-CE QUE LE TVC ?</h2>
			<div class="article">
				<p>
					Le Trust Vector Controler est un système de correction de trajectoir pour une fusée amateur de faible puissance en se basant sur la technologie de poussée vectorielle. Avant de commencer, qu'est-ce que la poussée vectorielle ?<br>
					La poussée vectorielle est une technologie utilisée dans l'aérospatial et l'aéronautique permettant de modifier l'attitude d'un engin en changeant la direction de la poussée. Plusieurs systèmes existent permettant cela comme la mobilité du moteur, l'utilisation d'une tuyère mobile, ou alors l'utilisation de surfaces de contrôles afin d'orienter le flux. Le but du projet OpenRTVC est de stabiliser une fusée amateur de faible puissance pour que son vol soit le plus vertical possible pendant la phase propulsée.
				</p>
				<p>
					Plusieurs fichiers  <a href="https://github.com/OpenRTVC/openrtvc/tree/master/Conception/Etudes%20theoriques" target="_blank">PDF</a> manuscrits concernant l'aspect théorique de ce projet son disponibles.
				</p>
				<p>
					Ce travail concerne principalement la recherche d'une fonction de transfert permettant de mettre en relation l'angle d'inclinaison de la fusée et l'angle du moteur fusée. Le modèle établit est en 2D. En partant de l'hypothèse que le roulis et le tangage de la fusée soient correctement corrigés simultanément et indépendament l'un de l'autre par le programme embarqué, le modèle 2D semble ne pas être une mauvaise approche. Pour ceux faire, deux asservissements de type PID sont intégrés dans le programme. L'attitude de la fusée sera mesurée par grâce à une centrale inertielle placée au centre de gravité de celle-ci. Une fois le modèle élaboré et la fonction de transfert trouvée, l'étape suivante est la réalisation d'une simulation sous Matlab 2017 afin de déterminer les coefficients approximatifs de réglage des correcteurs PID. Ces valeurs dépendent du moment d'inertie de la fusée sur l'axe en question, de la poussée moyenne du moteur et de la distance entre le point d'application de la force de poussée et le centre de gravité de la fusée. Les autres documents concernent la recherche d'une méthode de mesure du moment d'inertie de sa fusée avec des moyens simples et également la résolution d'un problème mécanique concernant la cinématique du système d'orientation du moteur (système TVC).
				</p>
			</div>
		</article>
		<article>
			<h2>GALERIES</h2>
			<div class="folio">
				<div class="chapitre-folio">
					<a href="../dev/developpement.html#TVC-V2" class="a-img-text">
						<img class="a-img" src="../image/TVC-V-X.JPG" width="300px">
						<span class="a-text c1">TVC-Verion 2</span>
					</a>
					<a href="../dev/developpement.html#TVC-V2" class="a-img-text">
						<img class="a-img" src="../image/TVC-V-FA.jpg" width="300px">
						<span class="a-text c1">TVC-Version 2</span>
					</a>
					<a href="../dev/developpement.html#TVC-V2" class="a-img-text">
						<img class="a-img" src="../image/TVC-V-FA-B.jpg" width="300px">
						<span class="a-text c1">TVC-verion 2</span>
					</a>
				</div>
				<div class="chapitre-folio">
					<a href="../dev/developpement.html#TVC-V1" class="a-img-text">
						<img class="a-img" src="../image/TVC1-X.jpg" width="300px">
						<span class="a-text c2">TVC-Version 1</span>
					</a>
					<a href="../dev/developpement.html#TVC-V1" class="a-img-text">
						<img class="a-img" src="../image/TVC1-Y.jpg" width="300px">
						<span class="a-text c2">TVC-Version 1</span>
					</a>
					<a href="../dev/developpement.html#TVC-V1" class="a-img-text">
						<img class="a-img" src="../image/TVC1-FACE.jpg" width="300px">
						<span class="a-text c2">TVC-Version 1</span>
					</a>
				</div>
				<div class="chapitre-folio exclu">
					<img src="../image/animation 2.mp4" width="300px">
					<img src="../image/animation 2.mp4" width="300px">
					<img src="../image/animation 2.mp4" width="300px">
				</div>
				<div>
					<img src="">
				</div>
			</div>
		</article>
		<article>
			<h2>MONTAGE</h2>
			<div class="article">
				<p>
					Les principales parties du support du moteur sont imprimées en 3D à l'aide de PLA (Acide Polylactique). Toute fois il est posible de l'imprimer avec de l'ABS (Acrylonitrile Butadiène Styrène) mais l'impression étant plus compliqué à métriser, nous te recomandons donc l'utilisation de PLA. La structure et la mécanique sont conçues pour des cellules à parois fines de 75 mm et peuvent supporter jusqu'à 40 Newtons de force, bien qu'elles fonctionnent mieux avec 10-20 Newtons de force constante. La monture peut être actionnée à ±6° avec une largeur de bande maximale de ??Hz sur toute la gamme.  Ces pièces ont été conçues autour de composants peu coûteux et largement disponibles. Le maintien des coûts de réparation à un faible niveau permet de minimiser les ressources nécessaires à la reconstruction après tout démontage rapide et non programmé.
				</p>
				<p>
					
				</p>
				<p>
					Plus d’informations relatives au montage dans la partie<a href="../dev/developpement.php"> développement</a>.
				</p>
			</div>
		</article>
		<article>
			<h2>INFORMATIONS</h2>
			<div class="article info">
				<p>
					Tous les travaux d'OpenRTVC sont sous <a href="../about/apropos.php#MIT">Licence MIT</a>.
				</p>
				<p>
					Si vous voulez construire votre TVC de A à Z vous retrouverez la liste de tout les composant mecanique et electronique dans la partie<a href="../dev/developpement.php"> developpement </a>Ainsi que toute la documentation nécessaire à la fabrication.<br>
					Et pour les plus impatient d'entre vous voici quelques <a href="../shop/shop.php">kits OpenRTVC</a><br>
					Vous retouvez aussi l'integraliter des fichier qui on servi a sa conception sur notre <a href="https://github.com/OpenRTVC/openrtvc" target="_blank">github</a> et et vous pouver des à présent telecharger le PDF explicatif ci-desous.
				</p>
			</div>
		</article>
	</section>

	<?php require'../php/footer.php'; ?>

</body>
</html>