<?php
namespace model;

class Cinema
{

    private $id;

    private $nom;

    private $ville;

    private $pays;

    function Cinema()
    {}

    function Cinema($id, $nom, $ville, $pays)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->ville = $ville;
        $this->pays = $pays;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     *
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     *
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
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
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     *
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     *
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }
}

