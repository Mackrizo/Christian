<?php

namespace manager;

include_once ('../common/View.php');
include_once ('../model/Film.php');
// include_once('../dao/DBConnection.php');
include_once ('../dao/Factory.php');
use common\View;
use dao\Factory;
use model\Film;

class FilmManager {
	private $db;
	public function _construct() {
	}
	public function getAll() {
		echo "quoiq";
		$dbConnection = mysqli_connect ( "localhost", "root", "mackrizo", "Moviepolis" );
		$query = "SELECT * from Films";
		$result = mysqli_query ( $dbConnection, $query );

		if (! $result) {
			echo "<br>probleme de query";
		} else {
			echo "on le var_dump<br>";
			var_dump ( $result );
			/*
			 * while ( $row = $result->fetch_assoc () ) {
			 *
			 * var_dump ( $row ['id_film'] );
			 * echo "<br>";
			 *
			 * var_dump ( $row ['titre_film'] );
			 * echo "<br>";
			 * var_dump ( $row ['pays'] );
			 * echo "<br>";
			 * var_dump ( $row ['duree'] );
			 * echo "<br>";
			 * var_dump ( $row ['date_sortie'] );
			 * echo "<br>";
			 * var_dump ( $row ['synopsis_film'] );
			 * echo "<br>";
			 * var_dump ( $row ['id_personne'] );
			 * echo "<br>*****************************<br>";
			 *
			 * $film = new Film ( $row );
			 *
			 * $film->setId ( $row ['id_film'] );
			 * $film->setTitre ( $row ['titre_film'] );
			 * $film->setPays ( $row ['pays'] );
			 * $film->setDuree ( $row ['duree'] );
			 * $film->setSynopsis ( $row ['synopsis_film'] );
			 * // $film->setRealisateur ( new Personne () );
			 * // $film->getRealisateur->setId ( $row ['id_personne'] );
			 *
			 * $tab [] = $film;
			 * }
			 */
		}

		mysqli_close ( $dbConnection );
		return "cest boin";
	}
	public function search() {
		echo " ** search ** ";
		/*
		 * $boul = new Film();
		 * $facto = new Factory();
		 * $list = serialize($facto->search($boul, ""));
		 * View::show('film_search', array('data' => urlencode($list)));
		 */
	}
	public static function create($req) {
		// r�cup�rer les param�tres de la requ�te
		$nom = $req ['nom'];
		$nb_vendu = $req ['nb_vendu'];

		// instantancier les objects Factory et Film
		$boul = new Film ();
		$facto = new Factory ();

		// initialiser les propri�t�s du film
		$boul->set_nom ( $nom );
		$boul->set_nb_vendu ( $nb_vendu );

		// ajouter le film dans la base
		$facto->create ( $boul );

		// rediriger vers la liste de films
		header ( 'Location:/movie/controller/FilmController.php?action=search' );
	}
	public static function read($req) {
		// instancier un object Film
		$boul = new Film ();
		// initialiser l'id
		$boul->set_id ( $req ['id'] );
		// effectuer la recherche dans la base
		$facto = new Factory ();
		$found = $facto->read ( $boul );
		// envoyer les donn�es � la vue et l'afficher
		View::show ( 'film_read', array (
				'id' => $found->get_id (),
				'nom' => $found->get_nom (),
				'nb_vendu' => $found->get_nb_vendu ()
		) );
	}
	public static function update($req) {
	}
	public static function delete($req) {
	}
}
