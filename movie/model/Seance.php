<?php
namespace model;

class Seance
{

    private $idSeance;

    private $numSemaineSeance;

    private $jourSeance;

    private $horaireSeance;

    private $idFilm;

    private $idSalle;

    public function __construct()
    {}

    function Seance($idSeance, $numSemaineSeance, $jourSeance, $horaireSeance, $idFilm, $idSalle)
    {
        $this->idSeance = $idSeance;
        $this->numSemaineSeance = $numSemaineSeance;
        $this->jourSeance = $jourSeance;
        $this->horaireSeance = $horaireSeance;
        $this->idFilm = $idFilm;
        $this->idSalle = $idSalle;
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
     * @return mixed
     */
    public function getNumSemaineSeance()
    {
        return $this->numSemaineSeance;
    }

    /**
     *
     * @return mixed
     */
    public function getJourSeance()
    {
        return $this->jourSeance;
    }

    /**
     *
     * @return mixed
     */
    public function getHoraireSeance()
    {
        return $this->horaireSeance;
    }

    /**
     *
     * @return mixed
     */
    public function getIdFilm()
    {
        return $this->idFilm;
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
     * @param mixed $idSeance
     */
    public function setIdSeance($idSeance)
    {
        $this->idSeance = $idSeance;
    }

    /**
     *
     * @param mixed $numSemaineSeance
     */
    public function setNumSemaineSeance($numSemaineSeance)
    {
        $this->numSemaineSeance = $numSemaineSeance;
    }

    /**
     *
     * @param mixed $jourSeance
     */
    public function setJourSeance($jourSeance)
    {
        $this->jourSeance = $jourSeance;
    }

    /**
     *
     * @param mixed $horaireSeance
     */
    public function setHoraireSeance($horaireSeance)
    {
        $this->horaireSeance = $horaireSeance;
    }

    /**
     *
     * @param mixed $idFilm
     */
    public function setIdFilm($idFilm)
    {
        $this->idFilm = $idFilm;
    }

    /**
     *
     * @param mixed $idSalle
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;
    }
}

