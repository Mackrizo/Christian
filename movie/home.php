<?php
$start_view = 'film_search';
$view = (isset ( $_GET ['view'] )) ? $_GET ['view'] : "";
if (! empty ( $view )) {

	echo "!empty view";
	$controller = explode ( "_", $view ) [0];
	$action = explode ( "_", $view ) [1];
	$header = header ( 'Location:/movie/controller/' . $controller . '.php?action=' . $action );
} else {
	$controller = explode ( "_", $start_view ) [0];
	$action = explode ( "_", $start_view ) [1];
	// header('Location:/movie/controller/FilmController.php?action='.$action);
	header ( 'Location:/movie/index.php' );
}

?>

