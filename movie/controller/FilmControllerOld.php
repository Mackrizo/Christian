<?php
namespace controller;

include_once('../common/View.php');
include_once('../model/Film.php');
//include_once('../dao/DBConnection.php');
include_once('../dao/Factory.php');
use common\View;
use dao\Factory;
use model\Film;

// v�rifier si la m�thode est GET
// et appeler la m�thode en fonction de l'action
if(isset($_GET['action']))
{
    $action = $_GET['action'];
    FilmController::search($_GET);
}

// v�rifier si la m�thode est POST
// et appeler la m�thode en fonction de l'action
if(isset($_POST['action']))
{
    $action = $_POST['action'];
    FilmController::search($_POST);
}

class FilmControllerOld extends Controller
{
    public static function search($req)
    {
        echo " on est bine dans la method filmcontroller::search";
       /* $boul = new Film();
        $facto = new Factory();
        $list = serialize($facto->search($boul, ""));
        View::show('film_search', array('data' => urlencode($list)));
        */
    }
    
    public static function create($req)
    {
        // r�cup�rer les param�tres de la requ�te
        $nom = $req['nom'];
        $nb_vendu = $req['nb_vendu'];
        
        // instantancier les objects Factory et Film
        $boul = new Film();
        $facto = new Factory();
        
        // initialiser les propri�t�s du film
        $boul->set_nom($nom);
        $boul->set_nb_vendu($nb_vendu);
        
        // ajouter le film dans la base
        $facto->create($boul);
        
        // rediriger vers la liste de films
        header('Location:/movie/controller/FilmController.php?action=search');
    }
    
    public static function read($req)
    {
        // instancier un object Film
        $boul = new Film();
        // initialiser l'id
        $boul->set_id($req['id']);
        // effectuer la recherche dans la base
        $facto = new Factory();
        $found = $facto->read($boul);
        // envoyer les donn�es � la vue et l'afficher
        View::show('film_read', array('id' => $found->get_id(), 'nom' => $found->get_nom(), 'nb_vendu' => $found->get_nb_vendu()));
    }
    
    public static function update($req)
    {
        
    }
    
    public static function delete($req)
    {
        
    }
    
}

