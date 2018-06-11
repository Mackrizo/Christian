<?php
namespace model;

class Salle
{

    private $idSalle;

    private $nomSalle;

    private $capacite;

    private $idCinema;

    public function __construct()
    {}

    function Salle($idSalle, $nomSalle, $capacite, $idCinema)
    {
        $this->idSalle = $idSalle;
        $this->nomSalle = $nomSalle;
        $this->capacite = $capacite;
        $this->idCinema = $idCinema;
    }

    /**
     *
     * @return mixed
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     *
     * @return mixed
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     *
     * @return mixed
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     *
     * @return mixed
     */
    public function getIdCinema()
    {
        return $this->idCinema;
    }

    /**
     *
     * @param mixed $idSalle
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;
    }

    /**
     *
     * @param mixed $nomSalle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;
    }

    /**
     *
     * @param mixed $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }

    /**
     *
     * @param mixed $idCinema
     */
    public function setIdCinema($idCinema)
    {
        $this->idCinema = $idCinema;
    }
}

