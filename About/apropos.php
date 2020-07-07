<?php
$title = 'À Propos';
require '../php/head.php';
require'../php/header.php'; 
?>

	<section>
		<h1 class="titre"><?= $title ?></h1>
		
		<article>
			<h2 class="qui">QUI ?</h2>
			<nav>
				<ul>
					<li class="deroulant"><a href="#">BORENSZTEJN<br>Titouan&ensp;</a>
						<ul class="sous">
							<li>
								<p>• 21 ans<br>• BAC +3<br>•  Concepteur de machines et de logiciels<br></p>
							</li>
						</ul>
					</li>

					<li class="deroulant"><a href="#">PERINETTI<br>Dylan&ensp;</a>
						<ul class="sous">
							<li>
								<p>
									• 18ans<br>• Terminal<br>• Concepteur de machines et de logiciels, Développement du site web<br>
								</p>
							</li>
						</ul>
					</li>

					<li class="deroulant"><a href="#">LOFORTE<br>Mateo&ensp;</a>
						<ul class="sous">
							<li>
								<p>• ?? ans<br>• ***<br>• Concepteur mécanique<br>
								</p>
							</li>
						</ul>
					</li>

					<li class="deroulant"><a href="#">ROBIN<br>Jimmy&ensp;</a>
						<ul class="sous">
							<li>
								<p>• ?? ans<br>• BAC +3<br>• Assistant d'analyse mathématique et de simulation<br>
								</p>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<aside>
				<p> <a href="../contact/contact.html">NOUS CONTACTER</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. </p>
			</aside>

		</article>

		<article>
			<h2>POURQUOI ?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>

		<article>
			<h2>COMMENT ?</h2>
			<p>
				Comment le projet a-t-il vu le jour ? En réalité c’est un peu grâce à <a href="https://bps.space/shop/signal-r2">bps.space</a> et au prix démesurés auquel on trouve des TVC dont on ne Connais même pas leur qualité et leur fiabilité.<br> 
				De plus la quantité faramineuse de projet  bancal et branlent sur des plates-formes telles que <a href="https://www.thingiverse.com">thingiverse </a>nous ont poussé à créer notre TVC.<br>
				C’est ainsi que le projet a vu le jour dans le serveur discord. Celui d’un youtubeur français Frenchrocketboy je vous conseille d’ailleurs d’aller je t’ai unBref coup d’œil sur sa chaîne qui se situe ci-dessous.
			</p>
			<div class="video-ytb">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/k-OyCN-fZzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<p>Voici la chaine de <a href="https://www.youtube.com/channel/UCvw6GoqrQ76gsGF2VASQ6uA" target="_blank">French rocket boy</a></p>
			</div>
		</article>

		<article>
			<h2>INFOS PRATIQUES</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<article id="MIT">
			<h2>Licence MIT</h2>
			<p>

				Copyright &copy; 2020 OpenRTVC

				Permission is hereby granted, free of charge, to any person obtaining a copy
				of this software and associated documentation files (the "Software"), to deal
				in the Software without restriction, including without limitation the rights
				to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
				copies of the Software, and to permit persons to whom the Software is
				furnished to do so, subject to the following conditions:

				The above copyright notice and this permission notice shall be included in all
				copies or substantial portions of the Software.

				THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
				IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
				FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
				AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
				LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
				OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
				SOFTWARE.
			</p>
		</article>
	</section>

	<?php require'../php/footer.php'; ?>
</body>
</html>
