<?php
namespace model;

class Reservation
{

    private $idReservation;

    private $quantite;

    private $prix;

    private $idClient;

    private $idSeance;

    public function __construct()
    {}

    function Reservation($idReservation, $quantite, $prix, $idClient, $idSeance)
    {
        $this->idReservation = $idReservation;
        $this->quantite = $quantite;
        $this->prix = $prix;
        $this->idClient = $idClient;
        $this->idSeance = $idSeance;
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
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     *
     * @return mixed
     */
    public function getIdSeance()
    {
        return $this->idSeance;
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
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     *
     * @param mixed $idSeance
     */
    public function setIdSeance($idSeance)
    {
        $this->idSeance = $idSeance;
    }
}

