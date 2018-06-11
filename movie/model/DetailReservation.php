<?php
namespace model;

class DetailReservation
{

    private $id;

    private $quantite;

    private $prix;

    private $idReservation;

    private $idTarif;

    private $tabGenre;

    public function __construct()
    {}

    function DetailReservation($id, $quantite, $prix, $idReservation, $idTarif)
    {
        $this->id = $id;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->idReservation = $idReservation;
        $this->idTarif = $idTarif;
    }

    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     *
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     *
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     *
     * @return mixed
     */
    public function getIdTarif()
    {
        return $this->idTarif;
    }

    /**
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     *
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     *
     * @param mixed $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }

    /**
     *
     * @param mixed $idTarif
     */
    public function setIdTarif($idTarif)
    {
        $this->idTarif = $idTarif;
    }

    /**
     *
     * @return mixed
     */
    public function getTabGenre()
    {
        return $this->tabGenre;
    }

    /**
     *
     * @param mixed $tabGenre
     */
    public function setTabGenre($tabGenre)
    {
        $this->tabGenre = $tabGenre;
    }
}

