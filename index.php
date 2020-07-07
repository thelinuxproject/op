<?php
$title = 'Acceuil';
require 'php/head.php';
require'php/header.php'; 
?>
<h1 class="titre"><?= $title ?></h1>

	<section id="Bienvenue">
            <h1>Bienvenue</h1>
        <div>
            <article>
                <img src="image/TVC-V-X.jpg" width="300px" align="right">
                <p>
                    Salut à vous et bienvenue sur OpenRTVC!<br> 
                    Vous, qui êtes en train de lire ce bref paragraphe, vous devez surment être un mordus d'astromodélisme ou de spacial!<br> Si ce n'est pas encore le cas, ça ne saurait tarder. Ici, on a créé et développé notre propre <a href="tvc/tvc.html">TVC </a>(Trust Vector Control).<br>
                    Et il est entièrement opensource, alors si vous voulez tester la correction de trajectoire de fusées amateures avec ce matériel de contrôle du vecteur poussée (TVC), ce site est fait pour vous!
                </p>
            </article>
        </div>
	</section>

    <section id="apropos">
        <a href="about/apropos.html"><h1>Qu'est-ce qu'OpenRTVC ?</h1></a>
        <div>
            <article>
                <p>
                    Le projet OpenRTV est open source. Toute reproduction est autorisée et même conseillée. Attention, toutes utilisations à des fins commerciales sont interdite. Toute fois si vous voulez nous soutenir vous pouvez faire un don juste <a href="#"> ici </a>ou encore acheter votre<a href="shop/shop.html"> pack OpenRTVC </a>.
                </p>
            </article>
        </div>
    </section>

    <?php require'php/footer.php'; ?>

</body>
</html>
