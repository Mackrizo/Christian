<h2>Liste de Films</h2>
<a href="/views/film_read.php">Lire</a><br><hr>
<?php 
include_once('../model/Film.php');

if(isset($_GET['data']))
{
	// déencoder l'url
	$data = urldecode(($_GET['data']));
	$data = unserialize($data);

	foreach ($data as $key => $value) 
	{
		?>
			<a href="/movie/controller/FilmController.php?action=read&id=<?=$value->get_id()?>"><?=$value->get_titre()?></a><br>
		<?php
	}
}

?>