<?php
namespace model;

class Personne
{

    private $idPersonne;

    private $nom;

    private $prenom;

    private $dateDeNaissance;

    private $nationalite;

    public function __construct()
    {}

    function Personne($idPersonne, $nom, $prenom, $dateDeNaissance, $nationalite)
    {
        $this->idPersonne = $idPersonne;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->nationalite = $nationalite;
    }

    /**
     *
     * @return mixed
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     *
     * @return mixed
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     *
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     *
     * @param mixed $idPersonne
     */
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    }

    /**
     *
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     *
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     *
     * @param mixed $dateDeNaissance
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     *
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }
}

