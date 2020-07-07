<?php
$title = 'Developpement';
require '../php/head.php';
require'../php/header.php'; 
?>

	<section>
		<h1 class="titre"><?= $title ?></h1>
		<div class="sommaire">
			<h2>- SOMMAIRE -</h2>
			<nav>
				<ul>
					<li><a href="#TVC-V1">TVC - Version 1<br>(Simple)</a></li>
					<li><a href="#TVC-V2">TVC - Version 2<br>(télémètrie en temps réél et sauvergarde)</a></li>
					<li><a href="#TVC-Vmini">TVC - Version Mini <br>(adapter au marcher Français)</a></li>
					<li><a href="#SYST-PARA">Système Parachute - Version 1(Simple Trappe)</a>
				</ul>
			</nav>
		</div>
		<article id="TVC-V1">
			<h2>TVC - Version 1</h2>
			<div class="box-1">
				<img  src="../image/TVC1-FACE.jpg" width="300px" align="right">
				<img  src="../image/TVC1-X.jpg" width="300px">
				<h3>Matériel électronique:</h3>
				<ul>
					<li>Une centrale inertielle MPU9250 (3 accéléromètres, 3 gyroscopes et 3 magnétomètres)</li>
					<li>Un baromètre BMP180</li>
					<li>Un module SPI lecture/écriture de carte SD</li>
					<li>Un module de télémétrie série</li>
					<li>Une carte Arduino Nano</li>
				</ul>
			</div>

			<div class="box-1">
				<img  src="../image/TVC1-X.jpg" width="300px" align="left">
				<h3>Matériel mécanique:</h3>
				<ul>
					<li>2x servomoteurs SG90</li>
					<li>2x kit "Servo linkage stopper"</li>
					<li>2x axe en acier 5mm x 14mm (À découper à la Dremel)</li>
					<li>2x axe en acier 5mm x 9mm (À découper à la Dremel)</li>
					<li>4x vis TBHC M3x10mm</li>
					<li>4x vis sans tête M3x4mm</li>
				</ul>
			</div>
			<div class="box-1">
				<img src="../image/animation 2.mp4" width="300px" align="right">
				<h3>Notes</h3>
			<p>
				Ce système est conçu pour une fusée dont le corps est consituté d'un tube en carton/kraft de 75mm de diamiètre pour l'éxpédition postale. Il sera nécéssaire de faire 2 découpes dans ce tube pour la mobilité des éléments mécaniques.
			</p>
			</div>
		</article>

		<article id="TVC-V2">
			<h2>TVC - Version 2</h2>
			<div class="box-1">
				<img src="../image/TVC-V-X.jpg" width="300px" align="left">
				<h3>Matériel électronique:</h3>
				<ul>
					<li>Une centrale inertielle MPU9250 (3 accéléromètres, 3 gyroscopes et 3 magnétomètres)</li>
					<li>Un baromètre BMP180</li>
					<li>Un module SPI lecture/écriture de carte SD</li>
					<li>Un module de télémétrie série</li>
					<li>Une carte Arduino Mega Pro(ATMega2560)</li>
				</ul>
			</div>
			<div class="box-1">
				<img src="../image/TVC-V-FA.jpg" width="300px" align="right">
				<h3>Matériel mécanique:</h3>
				<ul>
					<li>2x servomoteurs SG90</li>
					<li>2x kit "Servo linkage stopper"</li>
					<li>2x axe en acier 5mm x 14mm (À découper à la Dremel)</li>
					<li>2x axe en acier 5mm x 9mm (À découper à la Dremel)</li>
					<li>4x vis TBHC M3x10mm</li>
					<li>4x vis sans tête M3x4mm</li>
				</ul>
			</div>
			<div class="box-1">
				<img src="../image/animation 2.mp4" width="300px" align="right">
				<h3>Notes</h3>
			<p>
				Ce système est conçu pour une fusée dont le corps est consituté d'un tube en carton/kraft de 75mm de diamiètre pour l'éxpédition postale. Il sera nécéssaire de faire 2 découpes dans ce tube pour la mobilité des éléments mécaniques.
			</p>
			</div>
		</article>

		<article id="TVC-Vmini">
			<h2>TVC - Version Mini</h2>
			<div class="box-1">
				<img src="../image/TVC-MINI.png" width="300px" align="right">
				<h3>Matériel électronique:</h3>
				<ul>
					<li>DES TRUCS</li>
					<li>DES TRUCS</li>
					<li>DES TRUCS</li>
					<li>DES TRUCS</li>
				</ul>
			</div>
			<div class="box-1">
				<img src="../image/TVC-MINI.png" width="300px" align="left">
				<h3>Matériel mécanique:</h3>
				<ul>
					<li>DES TRUCS</li>
					<li>DES TRUCS</li>
					<li>DES TRUCS</li>
					<li>DES TRUCS</li>
				</ul>
			</div>
			<div class="box-1">
				<img src="../image/animation 2.mp4" width="300px" align="right">
				<h3>Notes</h3>
			<p>
				Ce système est conçu pour une fusée dont le corps est consituté d'un tube en carton/kraft de 4,8mm de diamiètre pour l'éxpédition postale. Il sera nécéssaire de faire 2 découpes dans ce tube pour la mobilité des éléments mécaniques.
			</p>
			</div>
		</article>
		<article id="SYST-PARA">
			<h2>Système Parachute - Vesrion 1</h2>
			<div class="box-2">
				<a href="../shop/shop.html"><img class="img-visible" src="../image/OpenRTVC-PCB.jpg" width="200px" align="right"></a>
				<a href="../shop/shop.html"><img class="img-visible" src="../image/Plan-OpenRTVC-PCB.jpg" width="175px" align="right"></a>
				<h3>Matériel électronique:</h3>
				<ul>
					<li>PCB(OpenRTVC)</li>
				</ul>
			</div>

			<div class="box-2">
				<img src="../image/Systeme-PARA.jpg" width="200" align="left">
				<img src="../image/fuse-plan.jpg" width="250" align="right">
				<h3>Matériel mécanique:</h3>
				<ul>
					<li>1x servomoteurs SG90</li>
					<li>Support moteur (impprimé en 3D)</li>
				</ul>
			</div>
	</section>

	<?php require'../php/footer.php'; ?>

</body>
</html>