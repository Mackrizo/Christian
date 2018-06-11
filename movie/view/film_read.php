<?php 
$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
$titre = (isset($_GET['titre'])) ? $_GET['titre'] : "inconnu";
$pays = (isset($_GET['pays'])) ? $_GET['pays'] : "inconnu";
$duree = (isset($_GET['duree'])) ? $_GET['duree'] : 0;

 ?>
<h2>Voir un film</h2>
<a href="/">Liste</a> | <a href="/views/film_search.php">Rechercher</a><br><hr>
<p>Le film de ref <strong><?= $id ?></strong> Titre => <strong><?= $titre ?></strong>, durée <strong><?= $duree ?></strong></p>

